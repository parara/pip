#!/usr/bin/env python
 
import json
 
#openfile = open("Rabusoto.json","r").read()
#data = json.loads(openfile)

statuses = json.loads(open('jmr.json').read())

status_texts = [ status ['text']
  for status in statuses
]

print json.dumps(status_texts[0:5], indent=1)
 
#text = data['text']
#password = data['user']['screen_name']
#coordinates = data['coordinates']
#date = data['created_at'] #utc, so add 7 gmt.

#print text
#print password
#print coordinates
#print date