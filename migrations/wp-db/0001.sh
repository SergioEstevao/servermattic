#!/bin/sh

export PATH=$PATH:/usr/local/mysql5.6/bin/

if [ `hostname` = db1.g1.gm.a8c.com ]; then
    shard=0
else
    shard=1
fi

ln -fs /etc/mysql-configs/mysql1-$shard.cnf /etc/mysql/mysql1.cnf
ln -fs /etc/mysql-initscripts/mysql-5.6 /etc/init.d/mysql1

mkdir -p /var/log/mysql1
chown mysql.mysql /var/log/mysql1
cd /usr/local/mysql5.6/
./scripts/mysql_install_db --defaults-file=/etc/mysql/mysql1.cnf --user=mysql --datadir=/var/lib/mysql1 --force  --skip-name-resolve
chown -R mysql.mysql /var/lib/mysql1
/etc/init.d/mysql1 start
/usr/local/mysql5.6/bin/mysqladmin --defaults-file=/etc/mysql/mysql1.cnf -u root password 'god'
mysql --defaults-file=/etc/mysql/mysql1.cnf -u root -sN  -pgod -e "create user 'wp'@'localhost' IDENTIFIED BY 'drupal';"
mysql --defaults-file=/etc/mysql/mysql1.cnf -u root -sN  -pgod -e "GRANT ALL ON wp.* TO 'wp'@'localhost';"
