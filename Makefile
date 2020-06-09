setup:
	svn co https://plugins.svn.wordpress.org/datawrapper-oembed svn

icons:
	convert images/icon.png -resize 128x128 svn/assets/icon-128x128.png
	convert images/icon.png -resize 256x256 svn/assets/icon-256x256.png

copy:
	cp -R datawrapper-oembed/* svn/trunk/


