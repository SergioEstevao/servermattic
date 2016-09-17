cd /root
rm -Rf WordPress
git clone --depth 1 https://github.com/WordPress/WordPress.git
cp -Rf WordPress/* /var/www
service ngnix reload
