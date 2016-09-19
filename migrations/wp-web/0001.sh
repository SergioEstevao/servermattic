#!/bin/bash

cd /root
git clone git@github.com:WordPress/WordPress.git
cd WordPress
git checkout 4.6.1
cp -var /root/WordPress /var/www
rm -r /var/www/.git

useradd nginx -U -d /nonexistent -s /usr/sbin/nologin
chown -R nginx:nginx /var/www

service ngnix restart
