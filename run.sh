#!/bin/bash

# Condition
# Cek crawling 200 buah, hasil didapat, jam 3 pagi
# Cek tanggal created twit, jika beda, inset ke database (dan ditampilkan) dengan status verifikasi 0. jam 4 pagi (atau berurutan),
# Manusia melakukan pengecekan jam 8 pagi hingga 4 sore,
# jika ada query dengan status verifiaksi (level 1) jam 5 sore
# jika berubah level 2, lakukan twit setelah jam 9 (besoknya)

pyhton mining.py > mining.json #use move old twit
python save.py #populate twit by 
#python insert.py
#manusia chekin
#python sendmail.py
#python sendtwit.py
- list todo
* user manajemen,
add user, email,
change user, password
----- done -----

* editable table
-- delete