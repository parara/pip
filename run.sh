#!/bin/bash
#
# Crawling Twitter
#
# Copyright (c) 2014, Estu Fardani <estu@di.blankon.in>
# All rights reserved. Released under the MIT license.

# crontab -e
# 30 23 * * * cd /home/user/pip/ && ./run.sh 2>&1 >> ../twitlog.log

python mining.py > mining.json #use move old twit
python save.py