#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

import json
import MySQLdb as mdb
import datetime
import os
import shutil

#http://zetcode.com/db/mysqlpython/ & http://stackoverflow.com/questions/18465411/python-mysqldb-insert-with-variables-as-parameters
# read from http://www.tutorialspoint.com/python/python_for_loop.htm
con = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8');

# add kondisi to nilai
kondisi ='0'
editor ='admin'

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
      id_twit = statuses[index]['id']
      #input to sql
      with con:
        cur = con.cursor(mdb.cursors.DictCursor)
        cur.execute("""INSERT INTO lapor(id_twit, tanggal, name, isi, id_progres, editor) VALUES (%s,%s,%s,%s,%s,%s) """, (id_twit, created_at,screen_name,text,kondisi,editor))

      print "sukses"
#end
# rename file and store in deference folder
dt = str(datetime.date.today())
newname = 'file_'+dt+'.json'
os.rename('mining.json', newname)
shutil.move(newname, 'db_json/'+newname)