#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

import json
import MySQLdb as mdb

#http://zetcode.com/db/mysqlpython/ & http://stackoverflow.com/questions/18465411/python-mysqldb-insert-with-variables-as-parameters
con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');
# read from http://www.tutorialspoint.com/python/python_for_loop.htm

# add kondisi to nilai
kondisi ='Belum Verifikasi'

# read json file
statuses = json.loads(open('mining.json').read())

# extract from statuses | done
# discard retuit, how?  | done
# add better algoritme?
for index in range(len(statuses)):
  text = statuses[index]['text']
  if (text[0:2] != 'RT'):
    # if date duplicate
    screen_name = '@'+statuses[index]['user']['screen_name']
    coordinates = statuses[index]['coordinates']
    created_at = statuses[index]['created_at']

    #input to sql
    with con:
      cur = con.cursor(mdb.cursors.DictCursor)
      cur.execute("""INSERT INTO Lapor(Date, Name, Isi, Status) VALUES (%s,%s,%s,%s) """, (created_at,screen_name,text,kondisi))

    print "sukses"

  #else:
  #  print index,"duplicate"

#end