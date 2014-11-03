### Crawling Twitter Base On Hastag
=========
oleh Estu Fardani (estu@di.blankon.in)

need python2.7, pip, twitter (pip), mysql-python (pip), tweepy(pip)
interface need LAMPP

#Condition
Cek crawling 200 buah, hasil didapat, jam 3 pagi
Cek tanggal created twit, jika beda, inset ke database (dan ditampilkan) dengan status verifikasi 0. jam 4 pagi (atau berurutan),
Manusia melakukan pengecekan jam 8 pagi hingga 4 sore,
jika ada query dengan status verifiaksi (level 1) jam 5 sore
jika berubah level 2, lakukan twit setelah jam 9 (besoknya)