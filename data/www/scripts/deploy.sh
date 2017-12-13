#!/usr/bin/env bash

if [[ $1 -eq 0 ]] ; then
	    echo 'ERROR: missing ticket number'
	    exit 1
fi
terminus multidev:delete -y uceap-reciprocity.rws-$1
terminus multidev:create -y uceap-reciprocity.qa rws-$1
terminus remote:drush uceap-reciprocity.rws-$1 --  recd

echo "-----------------------------------------------"
echo "http://rws-$1-uceap-reciprocity.pantheonsite.io"
echo "-----------------------------------------------"


echo "--------------------------------------------"
echo "https://uceapit.atlassian.net/browse/RWS-$1"
echo "--------------------------------------------"
