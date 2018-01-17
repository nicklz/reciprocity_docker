#!/usr/bin/env bash



## MySQL 
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql



echo "SYNC DATABASE"
echo "=================="
mysql -u root -h mysql --password=""  reciprocity < /var/www/dump.sql



