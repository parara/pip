### Crawling Twitter Base On Hastag
=========
oleh Estu Fardani (estu@di.blankon.in)

## Cara Memasang
=========

Linux, OSX

* Base System
..* Install gitcore
.... apt-get install gitcore

* Frontend
..* Install PHP5
..* Install mysql-server
..* Install apache2 (webserver)

* Backend
..* Install python 2.7
.... $ sudo apt-get install python2.7
..* Install pip from [here](https://pip.pypa.io/en/latest/installing.html)
.... $ wget https://bootstrap.pypa.io/get-pip.py
.... $ python get-pip.py
..* Install twitter (under pip)
.... $ pip install twitter
..* Install mysql-python
.... $ apt-get install python-mysqldb
..* Install tweepy (under pip)
.... $ pip install tweepy

* Configurasi
..* git clone https://github.com/tuanpembual/pip.git
..* Clone db minimal.
..* Set db token twitter apps (create app | links)
..* Set keyword for crawling

