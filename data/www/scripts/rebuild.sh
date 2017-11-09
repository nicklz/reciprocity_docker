#!/usr/bin/env bash



## MySQL 


## MySQL
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql



echo "drop database emp_dir;" | mysql -uroot -h mysql
echo "create database emp_dir;" | mysql -uroot -h mysql


echo "SYNC DATABASE"
echo "=================="

mysql -u root -h mysql -p reciprocity --password="" < /var/www/dump.sql



echo "SYNC DATABASE2"
echo "=================="

mysql -u root -h mysql -p emp_dir --password="" < /var/www/dump2.sql


cd /var/www/project/reciprocity && composer install --no-interaction --no-dev --prefer-dist

cd /var/www/project/reciprocity/web/sites/default && drush updb -y
cd /var/www/project/reciprocity/web/sites/default && drush cr -y
cd /var/www/project/reciprocity/web/sites/default && drush cim -y
cd /var/www/project/reciprocity/web/sites/default && drush cr -y
cd /var/www/project/reciprocity/web/sites/default && drush entup
