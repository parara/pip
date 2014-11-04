#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.
# http://zetcode.com/db/mysqlpython/
# http://stackoverflow.com/questions/18465411/python-mysqldb-insert-with-variables-as-parameters
# http://www.tutorialspoint.com/python/python_for_loop.htm
## query anti duplikate

import json
import MySQLdb as mdb

# add kondisi to nilai
kondisi ='Belum Verifikasi'
con = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8');

# read json file
statuses = json.loads(open('mining.json').read())
with con:
  cur = con.cursor(mdb.cursors.DictCursor)
  cur.execute("SELECT id_twit FROM Lapor")
  rows = cur.fetchall()

for index in range(len(rows)):
  if (statuses[index]["id"]==rows[index]["id_twit"]):
    print "ada"
  else:
    print "input"
    screen_name = '@'+statuses[index]['user']['screen_name']
    coordinates = statuses[index]['coordinates']
    created_at = statuses[index]['created_at']
    id_twit = statuses[index]['id']
    text = statuses[index]['text']
    with con:
      cekinput = con.cursor(mdb.cursors.DictCursor)
      cekinput.execute("""INSERT INTO Lapor(id_twit, Tanggal, Name, Isi, Verifikasi) VALUES (%s,%s,%s,%s,%s) """, (id_twit, created_at,screen_name,text,kondisi))
    print "sukses"