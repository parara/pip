#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

import twitter
import datetime
import json
import MySQLdb as mdb

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8');

with con:

  cur = con.cursor(mdb.cursors.DictCursor)
  cur.execute("SELECT * FROM twitter")

  rows = cur.fetchall()
  for row in rows:
    pass
    CONSUMER_KEY = row["CONSUMER_KEY"]
    CONSUMER_SECRET = row["CONSUMER_SECRET"]
    OAUTH_TOKEN = row["OAUTH_TOKEN"]
    OAUTH_TOKEN_SECRET = row["OAUTH_TOKEN_SECRET"]
    q = row["HASTAG"]

auth = twitter.oauth.OAuth(OAUTH_TOKEN, OAUTH_TOKEN_SECRET,
                           CONSUMER_KEY, CONSUMER_SECRET)
twitter_api = twitter.Twitter(auth=auth)

# since:2010-12-27 
# q = "@tuanpembual since:2014-11-4 until:2014-11-5"
# q="RaboSoto"
# jumlah query
count = 200

hariini = str(datetime.date.today())
besok = str(datetime.date.today()+datetime.timedelta(days=1))
query =q+" since:"+hariini+" until:"+besok

# See https://dev.twitter.com/docs/api/1.1/get/search/tweets
search_results = twitter_api.search.tweets(q=query, count=count)
statuses = search_results['statuses']

# Iterate through count more batches of results by following the cursor
for _ in range(count):
    #print "Length of statuses", len(statuses)
    try:
        next_results = search_results['search_metadata']['next_results']
    except KeyError, e: # No more results when next_results doesn't exist
        break
        
    # Create a dictionary from next_results, which has the following form:
    # ?max_id=313519052523986943&q=NCAA&include_entities=1
    kwargs = dict([ kv.split('=') for kv in next_results[1:].split("&") ])
    
    search_results = twitter_api.search.tweets(**kwargs)
    statuses += search_results['statuses']

# Show sample search result by slicing the list base on count...
print json.dumps(statuses[0:count], indent=1)

# run
# python mining.py > mining.json