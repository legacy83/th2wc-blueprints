#!/bin/sh

# - Bootstrap
# =========================================

domain='192.168.27.12.xip.io'

apache2AddVhost="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14-cookbook/0.2.0/book/stuff/apache2/addVhost.sh)"
apache2Add301Redirect="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14-cookbook/0.2.0/book/stuff/apache2/add301Redirect.sh)"
mySQLCreateDB="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14-cookbook/0.2.0/book/stuff/mySQL/createDB.sh)"

# -- WWW Setup
# =========================================

#echo "$apache2AddVhost" | bash -s "$domain"
#echo "$apache2AddVhost" | bash -s "www.$domain"
#echo "$apache2Add301Redirect" | bash -s "$domain" "www.$domain"

# -- MySQL Databases
# =========================================

#echo "$mySQLCreateDB" | bash -s "zuba"

# -- Symbolic Links
# =========================================

#rm -rf "/var/www/www.$domain/public_html"
#ln -s /vagrant/public "/var/www/www.$domain/public_html"