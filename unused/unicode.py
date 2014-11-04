#!/usr/bin/env python

rows=[{'Isi': u'City Of Yours #3\n#jogja #jogjaasat #instamoment #hope #togua #instamoment #vector http://t.co/FASK2qPqb3'}, {'Isi': u'Tim #SumurAsat Miliran akan bentuk tim mengajak ahli utk persiapan pumping test Fave Hotel #JogjaAsat'}, {'Isi': u'Malam ini tim baru #SumurAsat yg melibatkan byk warga muda &amp; perempuan akan merumuskan kembali langkah &amp; sikap terkait sikap #JogjaAsat'}, {'Isi': u'.@killthedj\'s "Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra.." is being talked about. http://t.co/wq8DnmUE8U'}]

statuses =[{"text": "City Of Yours #3\n#jogja #jogjaasat #instamoment #hope #togua #instamoment #vector http://t.co/FASK2qPqb3"}, {"text": "Tim #SumurAsat Miliran akan bentuk tim mengajak ahli utk persiapan pumping test Fave Hotel #JogjaAsat"}, {"text": "RT @chirpstory: .@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8D\u2026"}, {"text": "RT @Dandhy_Laksono: Menyimak TL @dodoputrabangsa tentang kompetisi perebutan air tanah antara warga vs hotel #JogjaAsat"}, {"text": "RT @wargaberdaya: \u201c@xcodefilmsjogja: @dodoputrabangsa @wargaberdaya http://t.co/jJ5dc0lhYg\u201d cc @anasir @Dandhy_Laksono @Teguh_es #JogjaAsat\u2026"}, {"text": "RT @omahekendeng: Yg dikota besar berebut air dgn pemilik hotel di #JogjaAsat . Sdgkan yg di desa berebut air dgn tambang #savekendeng http\u2026"}, {"text": "RT @chirpstory: .@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8D\u2026"}, {"text": ".@killthedj's \"Perjuangan Warga Miliran #JogjaAsat by @dodoputrabangsa #JogjaOra..\" is being talked about. http://t.co/wq8DnmUE8U"}]

#print rows
#print myList
#print statuses
#rows = db
#status = input
#bandingkan input dgn db
#input dlu baru db

for status in statuses:
  print status["text"]
  if status["text"] in rows:
    print "ada"
    #print rows['Isi']
    #print status['text']
  else:
    print "ndak ada"
  #print status['text']
  #print rows
 		# else:
 		# 	print "ndak sama"
	
	#print "status",status["text"]
  ## 
myList=[1,2,3,4,5,6] #newstatus
myFile=[10,5,7,8] #database

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