#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

import json
import MySQLdb as mdb

#http://zetcode.com/db/mysqlpython/ & http://stackoverflow.com/questions/18465411/python-mysqldb-insert-with-variables-as-parameters
con = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8');

with con:
  cekid = con.cursor(mdb.cursors.DictCursor)
  cekid.execute("SELECT id_twit FROM Lapor")
# read from http://www.tutorialspoint.com/python/python_for_loop.htm

# add kondisi to nilai
kondisi ='Belum Verifikasi'

# read json file
statuses = json.loads(open('mining.json').read())

## tambah id.

#dari id twitter, bandingkan dari id dari db
#kalo ada skip,


# extract from statuses | done
# discard retuit, how?  | done
# add better algoritme?
for index in range(len(statuses)):
  text = statuses[index]['text']
  #if (text[0:2] != 'RT'):
    # if date duplicate
  screen_name = '@'+statuses[index]['user']['screen_name']
  coordinates = statuses[index]['coordinates']
  created_at = statuses[index]['created_at']
  id_twit = statuses[index]['id']
  #input to sql
  with con:
    cur = con.cursor(mdb.cursors.DictCursor)
    cur.execute("""INSERT INTO Lapor(id_twit, Tanggal, Name, Isi, Verifikasi) VALUES (%s,%s,%s,%s,%s) """, (id_twit, created_at,screen_name,text,kondisi))

  print "sukses"

  #else:
  #  print index,"duplicate"
#end