#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

# need python, pip, twitter (pip), mysql-python (pip)
# testdb, twitapp@localhost, tw1t4pp

import json

# read from http://www.tutorialspoint.com/python/python_for_loop.htm
kondisi ='Belum Verifikasi'

# read json file
statuses = json.loads(open('crawling.json').read())

# extract from statuses
# discard retuit, how? 
for index in range(len(statuses)):
  print '@'+statuses[index]['user']['screen_name']
  print statuses[index]['text']
  print statuses[index]['coordinates']
  print statuses[index]['created_at']
  print kondisi

  #input to sql

  #print len(statuses)

#end