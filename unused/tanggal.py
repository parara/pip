#!/usr/bin/env python

import datetime
#print (time.strftime("%Y-%m-%d"))
print datetime.date.today()

q ="@tuanpembual"
hariini = str(datetime.date.today())
besok = str(datetime.date.today()+datetime.timedelta(days=1))
# since:2010-12-27 
# q = "@tuanpembual since:2014-11-4 until:2014-11-5"
# jumlah query
query =q+" since:"+hariini+" until:"+besok
print query