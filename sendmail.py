#!/usr/bin/env python
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.
## Send mail from python, retrive from http://stackoverflow.com/questions/882712/sending-html-email-using-python

import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

# Condition
# Cek crawling 200 buah, hasil didapat, jam 3 pagi
# Cek tanggal created twit, jika beda, inset ke database (dan ditampilkan) dengan status verifikasi 0. jam 4 pagi (atau berurutan),
# Manusia melakukan pengecekan jam 8 pagi hingga 4 sore,
# jika ada query dengan status verifiaksi (level 1) jam 5 sore
# jika berubah level 2, lakukan twit setelah jam 9 (besoknya)

# me == my email address | it retrive from machine or gmail setup
# you == recipient's email address | its get from database
me = "root@barito.kebakaranhutan.or.id"
you = "andro.medh4@gmail.com"

# Create message container - the correct MIME type is multipart/alternative.
msg = MIMEMultipart('alternative')
msg['Subject'] = "Link"
msg['From'] = me
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
s = smtplib.SMTP('localhost')
# sendmail function takes 3 arguments: sender's address, recipient's address
# and message to send - here it is sent as one string.
s.sendmail(me, you, msg.as_string())
s.quit()