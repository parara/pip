#!/usr/bin/env python
import MySQLdb as mdb

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');

with con:
  cur = con.cursor(mdb.cursors.DictCursor)
  cur.execute("SELECT * FROM Writers")
  
  rows = cur.fetchall()

  for row in rows:
    print row["Id"], row["Name"]

  #for i in range(cur.rowcount):
  #  row = cur.fetchone()
  #  print row[0], row[1]
