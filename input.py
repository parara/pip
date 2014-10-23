#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

## scrip to input result of crawling to database

# need python, pip, twitter (pip), mysql-python (pip)
# testdb, twitapp@localhost, tw1t4pp
# output nama, input ke database

# cron crawling > json, pecah json, connect db,
# insert db.  

import json
import MySQLdb as mdb

#http://zetcode.com/db/mysqlpython/
con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');
# CREATE TABLE Lapor(Id INT PRIMARY KEY AUTO_INCREMENT, Date VARCHAR(25), Name VARCHAR(25), Isi VARCHAR (160), Status VARCHAR(15)); 


# read from http://www.tutorialspoint.com/python/python_for_loop.htm
kondisi ='Belum Verifikasi'
# add kondisi to nilai

# read json file
statuses = json.loads(open('crawling.json').read())

# extract from statuses
# discard retuit, how?
# add better algoritme?
for index in range(len(statuses)):
  text = statuses[index]['text']
  if (text[0:2] != 'RT'):
    # if date
    screen_name = '@'+statuses[index]['user']['screen_name']
    coordinates = statuses[index]['coordinates']
    created_at = statuses[index]['created_at']

    #print '@'+statuses[index]['user']['screen_name']
    #print text
    #print statuses[index]['coordinates']
    #print statuses[index]['created_at']
    #print kondisi

    # Date VARCHAR(25), Name VARCHAR(25), Isi VARCHAR (160), Status VARCHAR(15)); 


    with con:
      cur = con.cursor(mdb.cursors.DictCursor)
      cur.execute("""INSERT INTO Lapor(Date, Name, Isi, Status) VALUES (%s,%s,%s,%s,%s,%s) """, (created_at,screen_name,text,kondisi))

    print 'Succesfully Inserted the values to DB !' 
    print "sukses"

  else:
    print index,"duplicate"

  #input to sql

  #print len(statuses)

#end