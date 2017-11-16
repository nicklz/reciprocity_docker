#!/usr/bin/env bash



## MySQL 
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql



echo "SYNC DATABASE"
echo "=================="

drush @pantheon.uceap-reciprocity.qa sql-dump | mysql -u root -h mysql -p reciprocity --password=""
mysqldump -u root -h mysql --password=""  reciprocity > /var/www/dump.sql



echo "RUN DRUSH"
echo "=================="
cd /var/www/project/reciprocity/web/sites/default && drush cr && drush updb -y && drush upwd sysadm --password="admin"
