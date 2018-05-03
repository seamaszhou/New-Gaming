import urllib
import urllib.request
from bs4 import BeautifulSoup
from urllib.request import Request, urlopen


site= "http://ku.gamersky.com/release/ps4_201805/"
hdr = {'User-Agent': 'Mozilla/5.0'}
req = Request(site,headers=hdr)
page = urlopen(req)
soup = BeautifulSoup(page,"html.parser")
i=1

for img in soup.findAll('img'):
	temp=img.get('src')
	if temp[:1]=="/":
		image = "http://ku.gamersky.com/release/ps4_201805/ "+ temp
	else:
		image = temp
	
	
	filename=str(i)
	i=i+1
		

	imagefile = open(filename+ '.jpg' ,'wb')
	print (imagefile)
	imagefile.write(urllib.request.urlopen(image).read())
	imagefile.close()
	
