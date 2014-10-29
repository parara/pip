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
    AUTH_TOKEN_SECRET = row[3]
    q = row[4]
    print CONSUMER_KEY, CONSUMER_SECRET,OAUTH_TOKEN,AUTH_TOKEN_SECRET,q
    