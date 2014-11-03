#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.
## Send mail from python, retrive from http://stackoverflow.com/questions/882712/sending-html-email-using-python
## and from gmail from http://stackoverflow.com/questions/10147455/trying-to-send-email-gmail-as-mail-provider-using-python

import smtplib
import MySQLdb as mdb

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

con = mdb.connect('localhost','twitapp','tw1t4pp','testdb');

with con:

  cur = con.cursor()
  cur.execute("SELECT * FROM mailserver")

  for i in range(cur.rowcount):
      
    row = cur.fetchone()
    a = row[0]
    b = row[1]
    c = row[2]
    d = row[3]

with con:

  cur = con.cursor()
  cur.execute("SELECT * FROM langganan where status='true'")

  for i in range(cur.rowcount):
      
    list = cur.fetchone()
    target = list[2]

# username == my email address | it retrive from machine or gmail setup
# you == recipient's email address | its get from database
username = a
password = b

you = target #its target from langganan

# Create message container - the correct MIME type is multipart/alternative.
msg = MIMEMultipart('alternative')
msg['Subject'] = "Crawling Testing"
msg['From'] = username
msg['To'] = you

# Create the body of the message (a plain-text and an HTML version).
## How inset variable from query to html text
text = "Hi!\nHow are you?\nHere is the link you wanted:\nhttp://www.python.org"
html = """\
<html>
  <head></head>
  <body>
    <p>Hi!<br>
       How are you?<br>
       Here is the <a href="http://www.python.org">link</a> you wanted.
    </p>
  </body>
</html>
"""

# Record the MIME types of both parts - text/plain and text/html.
part1 = MIMEText(text, 'plain')
part2 = MIMEText(html, 'html')

# Attach parts into message container.
# According to RFC 2046, the last part of a multipart message, in this case
# the HTML message, is best and preferred.
# so prefered send html message.
msg.attach(part1)
msg.attach(part2)

# Send the message via local SMTP server.
#server = c
#port = d
s = smtplib.SMTP(c+":"+d)
s.starttls()
s.login(username,password)

# sendmail function takes 3 arguments: sender's address, recipient's address
# and message to send - here it is sent as one string.
s.sendmail(username, you, msg.as_string())
s.quit()