#!/usr/bin/env python
import json

count = 5

statuses = json.loads(open('jmr.json').read())

for index in range(len(statuses)):
  print statuses[index]['text']


# fruits = ['banana', 'apple',  'mango']

# for fruit in fruits:        # Second Example
#    print 'Current fruit :', fruit

# for index in range(len(fruits)):
#    print 'Current fruit :', fruits[index]

print "Good bye!"