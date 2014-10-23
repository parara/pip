#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.


import twitter
import json

CONSUMER_KEY = 'C5lJE7T2QoQ4kCLmCYRj61SaD'
CONSUMER_SECRET = 'DULtzlHgGfnkO0GNtIpyYBvqW1M4hEfHuWrZ0m5JKnmedj2ljy'
OAUTH_TOKEN = '79529075-6fLXfXus6xyJN42KJG7vm2Apyqq5xQwanKM68vnMv'
OAUTH_TOKEN_SECRET = 'dSteIYhb9FGPoeyX3gz6b5zVJT4ny0nlNNhQ31evGn0sr'

auth = twitter.oauth.OAuth(OAUTH_TOKEN, OAUTH_TOKEN_SECRET,
                           CONSUMER_KEY, CONSUMER_SECRET)
twitter_api = twitter.Twitter(auth=auth)

# XXX: Set this variable to a trending topic, 
# or anything else for that matter. The example query below
# was a trending topic when this content was being developed
# and is used throughout the remainder of this chapter.

# key pencarian
q = '#JMR2014'

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