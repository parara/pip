#!/usr/bin/env python

rows=[{'Isi': u'City Of Yours #3\n#jogja #jogjaasat #instamoment #hope #togua #instamoment #vector http://t.co/FASK2qPqb3'}, {'Isi': u'Tim #SumurAsat Miliran akan bentuk tim mengajak ahli utk persiapan pumping test Fave Hotel #JogjaAsat'}, {'Isi': u'Malam ini tim baru #SumurAsat yg melibatkan byk warga muda &amp; perempuan akan merumuskan kembali langkah &amp; sikap terkait sikap #JogjaAsat'}, {'Isi': u'.@killthedj\'s "Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra.." is being talked about. http://t.co/wq8DnmUE8U'}]

statuses =[{"text": "City Of Yours #3\n#jogja #jogjaasat #instamoment #hope #togua #instamoment #vector http://t.co/FASK2qPqb3"}, {"text": "Tim #SumurAsat Miliran akan bentuk tim mengajak ahli utk persiapan pumping test Fave Hotel #JogjaAsat"}, {"text": "RT @chirpstory: .@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8D\u2026"}, {"text": "RT @Dandhy_Laksono: Menyimak TL @dodoputrabangsa tentang kompetisi perebutan air tanah antara warga vs hotel #JogjaAsat"}, {"text": "RT @wargaberdaya: \u201c@xcodefilmsjogja: @dodoputrabangsa @wargaberdaya http://t.co/jJ5dc0lhYg\u201d cc @anasir @Dandhy_Laksono @Teguh_es #JogjaAsat\u2026"}, {"text": "RT @omahekendeng: Yg dikota besar berebut air dgn pemilik hotel di #JogjaAsat . Sdgkan yg di desa berebut air dgn tambang #savekendeng http\u2026"}, {"text": "RT @chirpstory: .@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8D\u2026"}, {"text": ".@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8DnmUE8U"}]

# for status in statuses:
#   print status["text"]
#   if status["text"] in rows:
#     print "ada"
#     #print rows['Isi']
#     #print status['text']
#   else:
#     print "ndak ada"
#   #print status['text']
#   #print rows
#  		# else:
#  		# 	print "ndak sama"
	
# 	#print "status",status["text"]
#   ## 
myList=[{"text": "1"},{"text": "2"},{"text": "3"},{"text": "4"},{"text": "5"},{"text": "6"}] #newstatus
myFile=[{"text": "10"},{"text": "5"},{"text": "7"},{"text": "8"}] #database

set1= set(item for d in myList for item in d.items())
set2= set(item for d in myFile for item in d.items())

#print "setsatu",set1
#print "setdua",set2

print set1.intersection(set2)

#print {item[0]:item[1] for item in set1 & set2}
q = len(myFile)
for index in range(q):
  for ind_list in range(len(myList)):

    if (myList[ind_list]["text"]==myFile[index]["text"]):
      print "ada"
      #print myList[ind_list]["text"],myFile[index]["text"]
    #else:
    print "input"
    print myList[ind_list]["text"],myFile[index]["text"]

# for index in range(len(myFile)):
#   if (myList[index]["text"]==myFile):
#     print "ada"
#   else:
#     print "input"

# for n in myFile:
#   if n in myList:
#     print "ada",n
#   else:
#     print "ndak ada"

    ## jave ascii art 

# for index in range(len(myList)):
# 	for i in range(len(myFile)):
# 		pass
# 		if (myList[index]==myFile[i]):
# 			pass
# 			print myList[index]," sama ",myFile[i]
# 		else:
# 			print myList[index]," tidak sama ",myFile[i]