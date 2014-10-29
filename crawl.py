#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.


import twitter
import json
import MySQLdb as mdb

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');

with con:

  cur = con.cursor()
  cur.execute("SELECT * FROM Twitter")

  for i in range(cur.rowcount):
      
    row = cur.fetchone()
    CONSUMER_KEY = row[0]
    CONSUMER_SECRET = row[1]
    OAUTH_TOKEN = row[2]
    OAUTH_TOKEN_SECRET = row[3]
    q = row[4]

# this value get from db;
#CONSUMER_KEY = 'ZI1PLPq7emJnHWkcyq3tFDeWV'
#CONSUMER_SECRET = 'YCqck9ZB6rWGuEG5tCRVoOjHHnDd0Y6iFHSbleq70cDIjqTMHQ'
#OAUTH_TOKEN = '79529075-cnQlwAjcaiHYwYb8gGfe9Sq4W7mvhEwtpljLwstyL'
#OAUTH_TOKEN_SECRET = 'QEUUgVjFR568jDXpcuxxyXDe7qouWYkOebQZziYXqGgIJ'

auth = twitter.oauth.OAuth(OAUTH_TOKEN, OAUTH_TOKEN_SECRET,
                           CONSUMER_KEY, CONSUMER_SECRET)
twitter_api = twitter.Twitter(auth=auth)

# key pencarian
#q = '#RaboSoto'

# since:2010-12-27 

# jumalh query
count = 100

# See https://dev.twitter.com/docs/api/1.1/get/search/tweets
search_results = twitter_api.search.tweets(q=q, count=count)
statuses = search_results['statuses']


# Iterate through 5 more batches of results by following the cursor
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
# python crawl.py > jmr.json | or name output, whatever