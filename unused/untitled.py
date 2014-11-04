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

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8');

# add kondisi to nilai
kondisi ='Belum Verifikasi'

# read json file
statuses = json.loads(open('mining.json').read())
with con:
  cur = con.cursor(mdb.cursors.DictCursor)
  cur.execute("SELECT Tanggal FROM Lapor")
  rows = cur.fetchall()
  #print rows

for status in statuses:
  print status["created_at"]
  # for row in rows:
  #   #print "db",row["Isi"]
  #   if (status["text"]==row["Isi"]):
  #     #print status["text"]
  #     print "sama"
  #     #print row["Isi"]
  #   else:
  #     print "ndak sama"
  #     textnya = status["text"]
  #     nama = "@"+status["user"]["screen_name"]
  #     kordinat = status["coordinates"]
  #     dibuat = status["created_at"]
  #     print nama,textnya,dibuat,kondisi