AFTER STEP 1 DO THE FOLLOWING UNTIL I GET A CHANCE TO MAKE THIS A CONFIG (also, yes I know my key is in there) 
edit data/www/scripts/setup.sh lines 56-59 with your info
also go into pantheon and genearte your machine token and replace mine on line 106


0. Install Docker (https://blog.jayway.com/2017/04/19/running-docker-on-bash-on-windows/)

1. git clone git@github.com:nicklz/reciprocity_docker.git
2. cd reciprocity_docker
3. cp ~/.ssh/id_rsa data/www/id_rsa (make sure your public key is in github and pantheon as well)
4. docker-compose up -d
5. docker exec -it reciprocity_web bash
6. ./scripts/setup.sh (macs might need to chmod 777 these scripts so they can execute)


7. Visit http://local.reciprocity.edu:10081


port ****3 is without varnish
port ****6 is phpmyadmin
