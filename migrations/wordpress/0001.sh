cd /root
rm -Rf WordPress
git clone --depth 1 https://github.com/WordPress/WordPress.git
cp -Rf WordPress/* /var/www
service ngnix restart

#!/bin/bash
mkdir -p /var/log/mysql1-0
chown mysql.mysql /var/log/mysql1-0
cd /usr/local/mysql5.6/
./scripts/mysql_install_db --defaults-file=/etc/mysql/mysql1-0.cnf --user=mysql --datadir=/var/lib/mysql1-0 --force  --skip-name-resolve
chown -R mysql.mysql /var/lib/mysql1-0
/etc/init.d/mysql1-0 start
/usr/local/mysql/bin/mysqladmin --defaults-file=/etc/mysql/mysql1-0.cnf -u root password 'god'
mysql --defaults-file=/etc/mysql/mysql1-0.cnf -u root -sN  -pgod -e "create user 'wp'@'localhost' IDENTIFIED BY 'drupal';"
mysql --defaults-file=/etc/mysql/mysql1-0.cnf -u root -sN  -pgod -e "GRANT ALL ON wp.* TO 'wp'@'localhost';"
