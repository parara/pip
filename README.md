### Crawling Twitter Base On Hastag
=========
oleh Estu Fardani (estu@di.blankon.in)
Lisensi kode sumber dibawah MIT

## Cara Memasang
=========

Linux, OSX

* Base System
..* Install gitcore
.... apt-get install gitcore

* [Frontend](https://wiki.debian.org/LaMp)
..* Install mysql-server
.... $ sudo apt-get install mysql-server mysql-client
..* Install apache2 (webserver)
.... $ sudo apt-get install apache2
..* Install PHP5
.... $ sudo apt-get install install php5 php5-mysql libapache2-mod-php5

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

