#!/usr/bin/env bash



## MySQL 
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql



echo "drop database emp_dir;" | mysql -uroot -h mysql
echo "create database emp_dir;" | mysql -uroot -h mysql


echo "SYNC DATABASE"
echo "=================="

mysql -u root -h mysql -p reciprocity --password="" < /var/www/dump.sql



echo "RUN DRUSH"
echo "=================="
cd /var/www/project/reciprocity/docroot/sites/default && drush cr && drush updb -y
