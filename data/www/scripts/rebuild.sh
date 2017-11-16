#!/usr/bin/env bash



## MySQL 


## MySQL
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql




echo "SYNC DATABASE"
echo "=================="

mysql -u root -h mysql -p reciprocity --password="" < /var/www/dump.sql





cd /var/www/project/reciprocity && composer install

cd /var/www/project/reciprocity/web/sites/default && drush updb -y
cd /var/www/project/reciprocity/web/sites/default && drush cr -y
cd /var/www/project/reciprocity/web/sites/default && drush cim -y
cd /var/www/project/reciprocity/web/sites/default && drush cr -y
cd /var/www/project/reciprocity/web/sites/default && drush entity-updates
