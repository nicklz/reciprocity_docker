#!/usr/bin/env bash

terminus multidev:create uceap-reciprocity.qa rws-$1
terminus remote:drush uceap-reciprocity.rws-$1 --  recd

echo "-----------------------------------------------"
echo "http://rws-$1-uceap-reciprocity.pantheonsite.io"
echo "-----------------------------------------------"
