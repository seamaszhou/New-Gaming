import urllib
import urllib.request
from bs4 import BeautifulSoup
from urllib.request import Request, urlopen


site= "https://www.gamespot.com/reviews/nintendo-switch/"
hdr = {'User-Agent': 'Mozilla/5.0'}
req = Request(site,headers=hdr)
page = urlopen(req)
soup = BeautifulSoup(page,"html.parser")
i=1

for img in soup.findAll('img'):
	temp=img.get('src')
	if temp[:1]=="/":
		image = "https://www.gamespot.com/reviews/nintendo-switch/" + temp
	else:
		image = temp
	
	nametemp = img.get('alt')
	if len(nametemp)==0 :
		filename=str(i)
		i=i+1
	else:
		filename=nametemp
	
	imagefile = open(filename + ".jpeg",'wb')
	imagefile.write(urllib.request.urlopen(image).read())
	imagefile.close()
	