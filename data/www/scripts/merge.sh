#!/usr/bin/env bash


terminus backup:create uceap-reciprocity.qa
terminus remote:drush uceap-reciprocity.qa --  recd


echo "-----------------------------------------------"
echo "http://qa-uceap-reciprocity.pantheonsite.io"
echo "-----------------------------------------------"


