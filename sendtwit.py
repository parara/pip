#!/usr/bin/env python2.7
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.
# Source tweet.py by Alex Eames retrive from http://raspi.tv/?p=5908

import tweepy  
import sys  
  
# Consumer keys and access tokens, used for OAuth  
# i am use static info, just for this moment
consumer_key = 'mcRY7JvBk33YnTTQ5HI8wktCc'  
consumer_secret = 'fnODTKldDbda8mnazDASYUj75aiGCCvPC9Gncyg9Vrysg4cKFh'  
access_token = '79529075-ygIixacdarI49ZOLWtNk8UrPko5x4U9Q6L82MNjqY'  
access_token_secret = 'isjTE3Lqdmv3vY9dyOadRguLUfvBERPohmdPdiUEFcAPp'  
  
# OAuth process, using the keys and tokens  
auth = tweepy.OAuthHandler(consumer_key, consumer_secret)  
auth.set_access_token(access_token, access_token_secret)  
   
# Creation of the actual interface, using authentication  
api = tweepy.API(auth)  
  
if len(sys.argv) >= 2:  
    tweet_text = sys.argv[1]    
else:  
    tweet_text = "Ki mesti cah kae seng ngajari.."  
  
if len(tweet_text) <= 140:  
    api.update_status(tweet_text)  
else:  
    print "tweet not sent. Too long. 140 chars Max."
