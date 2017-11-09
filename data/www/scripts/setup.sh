#!/usr/bin/env bash


## for composer

apt-get update
apt-get install sudo

useradd -m docker

usermod -G root docker

mkdir ~/.ssh
cp -rf /var/www/id_rsa ~/.ssh/id_rsa
chmod 400 ~/.ssh/id_rsa

mkdir /home/docker/.ssh
cp -rf /var/www/id_rsa /home/docker/.ssh/id_rsa
chmod 400 /home/docker/.ssh/id_rsa

ln -s /var/www ~/sites


## Pre add ssh keys
ssh-keyscan -H github.com >> ~/.ssh/known_hosts
ssh-keyscan -H keys.gnupg.net >> ~/.ssh/known_hosts
ssh-keyscan -H raw.githubusercontent.com >> ~/.ssh/known_hosts
ssh-keyscan -H bitbucket.org  >> ~/.ssh/known_hosts
ssh-keyscan -H drush.in  >> ~/.ssh/known_hosts
ssh-keyscan -H git.reciprocity.org  >> ~/.ssh/known_hosts
ssh-keyscan -H reciprocity.org  >> ~/.ssh/known_hosts


## MySQL
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql




echo "SYNC DATABASE"
echo "=================="

mysql -u root -h mysql -p reciprocity --password="" < /var/www/dump.sql




echo "GIT === "
echo "=========="
cd /var/ && git config --global user.email "nicklz22@yahoo.com"
cd /var/ && git config --global user.name "Nick Kuhn"
cd /var/ && git config --global core.editor "vim"
cd /var/ && git config --global core.filemode


mkdir /var/www/project

cd /var/www/project && git clone git@github.com:UCEAP-IT/uceap-reciprocity.git reciprocity

chmod -R 777 /var/www/project/reciprocity

git config --global core.filemode false && cd /var/www/project/reciprocity && git config core.filemode false



#cd /var/www/project/reciprocity/docroot && sudo -u docker composer install --no-interaction --no-dev --prefer-dist


echo "COMPOSER === "
echo "=========="
cd /var/www/project/reciprocity && composer install


#cp -rf /var/www/local.reciprocity.org  /var/www/project/reciprocity/docroot/sites/
cp -rf /var/www/local.reciprocity.org/settings.php  /var/www/project/reciprocity/docroot/sites/default/settings.php



echo "DRUPAL UPDATE === "
echo "=========="
cd /var/www/project/reciprocity/docroot/sites/default && drush updb -y
cd /var/www/project/reciprocity/docroot/sites/default && drush cr -y
cd /var/www/project/reciprocity/docroot/sites/default && drush cim
