#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

## scrip to input result of crawling to database

# need python, pip, twitter (pip), mysql-python (pip)

# testdb, twitapp@localhost, tw1t4pp

# cron crawling > json | done
# pecah json | tanggal belom
# connect db | done
# insert db  | done, rejet if duplicate by date  

import json
import MySQLdb as mdb

#http://zetcode.com/db/mysqlpython/ & http://stackoverflow.com/questions/18465411/python-mysqldb-insert-with-variables-as-parameters

## Tabel Lapor
# CREATE TABLE Lapor(Id INT PRIMARY KEY AUTO_INCREMENT, Date VARCHAR(25),
# Name VARCHAR(25), Isi VARCHAR (160), Status VARCHAR(15)); 

## Tabel Twitter
# CREATE TABLE Twitter(CONSUMER_KEY VARCHAR(50), CONSUMER_SECRET VARCHAR(50), OAUTH_TOKEN VARCHAR(50), OAUTH_TOKEN_SECRET VARCHAR(25), HASTAG VARCHAR(25));

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');
# read from http://www.tutorialspoint.com/python/python_for_loop.htm

# add kondisi to nilai
kondisi ='Belum Verifikasi'

# read json file
statuses = json.loads(open('crawling.json').read())

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