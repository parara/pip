#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

# import module
import json
import MySQLdb as mdb

kondisi = 'Belum terverifikasi'

# masukkan data file ke variabel
open_file = open('mining.json','r').read()

# load data ke array
data = json.loads(open_file)

# iterasi data array
for tweet in data:
  # buka koneksi ke database
  db = mdb.connect('localhost','twitapp','tw1t4pp','testdb', use_unicode=True,charset='utf8')
  cursor = db.cursor(mdb.cursors.DictCursor)

  # inisialisasi
  text = tweet['text']
  tweet_id = tweet['id']
  screen_name = tweet['user']['screen_name']
  created_at = tweet['created_at']

  # query untuk cek ke database apakah twit tersebut ada atau tidak
  sql_select = '''SELECT 
                    id_twit 
                  FROM 
                    Lapor 
                  WHERE id_twit=%s'''
  cursor.execute(sql_select, (tweet_id,))
  check_tweet = cursor.fetchone()

  # kalau tidak ada, insert data ke database
  if not check_tweet:
    insert_data = '''INSERT INTO 
                        Lapor (id_twit, 
                               Tanggal, 
                               Name, 
                               Isi, 
                               Verifikasi)
                     VALUES (%s, %s, %s, %s, %s)'''
    cursor.execute(insert_data, (tweet_id,
                                 created_at,
                                 screen_name,
                                 text,
                                 kondisi,))
    # commit data ke database
    db.commit()
    print 'insert sukses'
  else:
    print 'sudah ada datanya, tidak dimasukkan'

  # tutup koneksi database
  db.close()