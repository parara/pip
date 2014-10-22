#!/usr/bin/env python
 
import json
 
openfile = open("db.json","r").read()
data = json.loads(openfile)
 
username = data['username']
password = data['password'][0]['password_array']
print username
print password