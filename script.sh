#!/bin/bash
mv /home/sturtz/data.txt /home/sturtz/requests/url.txt
#sed -iz s/ //g /home/sturtz/requests/url.txt
awk '{ printf "php spider.php -u "; print }' /home/sturtz/requests/url.txt > /home/sturtz/requests/script.txt
sed -i s/$/\-r\ \-f\ \-l/ /home/sturtz/requests/script.txt
x=`echo "cd /home/sturtz/public_html/admin"; cat /home/sturtz/requests/script.txt`
echo "$x" > /home/sturtz/requests/script.txt
mv /home/sturtz/requests/script.txt  /home/sturtz/requests/request.sh
cat /home/sturtz/requests/url.txt | tee -a /home/sturtz/.archive/url.txt
chmod -x /home/sturtz/requests/request.sh
