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
ssh-keyscan -H ci-406-uceap-reciprocity.pantheonsite.io  >> ~/.ssh/known_hosts
ssh-keyscan -H pantheonsite.io  >> ~/.ssh/known_hosts
ssh-keyscan -H codeserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in  >> ~/.ssh/known_hosts
ssh-keyscan -H codeserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:2222  >> ~/.ssh/known_hosts






echo "GIT === "
echo "=========="
cd /var/ && git config --global user.email "nicklz22@yahoo.com"
cd /var/ && git config --global user.name "Nick Kuhn"
cd /var/ && git config --global core.editor "vim"
cd /var/ && git config --global core.filemode

rm -rf /var/www/project
mkdir /var/www/project

#cd /var/www/project && git clone --recursive git@github.com:UCEAP-IT/uceap-reciprocity.git reciprocity

cd /var/www/project  && git clone ssh://codeserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf@codeserver.dev.124a2a40-4bd3-440e-950c-e2302f8952bf.drush.in:2222/~/repository.git reciprocity

cd /var/www/project/reciprocity && git config --global user.email "nicklz22@yahoo.com"
cd /var/www/project/reciprocity && git config --global user.name "Nick Kuhn"
cd /var/www/project/reciprocity && git config --global core.editor "vim"
cd /var/www/project/reciprocity && git config --global core.filemode

chmod -R 777 /var/www/project/reciprocity

git config --global core.filemode false && cd /var/www/project/reciprocity && git config core.filemode false



#cd /var/www/project/reciprocity/web && sudo -u docker composer install --no-interaction --no-dev --prefer-dist


echo "COMPOSER === "
echo "=========="
cd /var/www/project/reciprocity && composer install


#cp -rf /var/www/local.reciprocity.edu  /var/www/project/reciprocity/web/sites/
cp -rf /var/www/local.reciprocity.edu/settings.php  /var/www/project/reciprocity/web/sites/default/settings.local.php

cp /var/www/pantheon.aliases.drushrc.php  /root/.drush/


## MySQL
echo "drop database reciprocity;" | mysql -uroot -h mysql
echo "create database reciprocity;" | mysql -uroot -h mysql




echo "SYNC DATABASE"
echo "=================="
cp /var/www/project/reciprocity/build/bootstrap.sql /var/www/dump.sql
mysql -u root -h mysql -p reciprocity --password="" < /var/www/dump.sql



echo "DRUPAL UPDATE === "
echo "=========="
cd /var/www/project/reciprocity/web/sites/default && drush updb -y
cd /var/www/project/reciprocity/web/sites/default && drush cr -y
cd /var/www/project/reciprocity/web/sites/default && drush cim



echo "TERMINUS === " 
curl -O https://raw.githubusercontent.com/pantheon-systems/terminus-installer/master/builds/installer.phar && php installer.phar install
terminus auth:login --machine-token=Luj0ZyOzw3X0dzRCNeILlNCzLjfFeg79Gmx1hwPhEzCxy


