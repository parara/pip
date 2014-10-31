#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.


import twitter
import json

CONSUMER_KEY = 'ZI1PLPq7emJnHWkcyq3tFDeWV'
CONSUMER_SECRET = 'YCqck9ZB6rWGuEG5tCRVoOjHHnDd0Y6iFHSbleq70cDIjqTMHQ'
OAUTH_TOKEN = '79529075-cnQlwAjcaiHYwYb8gGfe9Sq4W7mvhEwtpljLwstyL'
OAUTH_TOKEN_SECRET = 'QEUUgVjFR568jDXpcuxxyXDe7qouWYkOebQZziYXqGgIJ'

auth = twitter.oauth.OAuth(OAUTH_TOKEN, OAUTH_TOKEN_SECRET,
                           CONSUMER_KEY, CONSUMER_SECRET)
twitter_api = twitter.Twitter(auth=auth)

q = '#Togua'

count = 100

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

print json.dumps(statuses[0:count], indent=1)