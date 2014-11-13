#!/usr/bin/env python
import datetime
import json
import os
import shutil

print datetime.date.today()
dt = str(datetime.date.today())

newname = 'file_'+dt+'.json'
os.rename('db.json', newname)
print newname
shutil.move(newname, 'db_json/'+newname)