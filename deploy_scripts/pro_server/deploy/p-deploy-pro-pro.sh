#!/bin/bash

echo -ne "Type 'deploy production production' to confirm: \n"

read S2

S1='deploy production production'
#S1='hi'

if [ "$S1" = "$S2" ];
then

	echo -e "Code correct...";
	sleep 1
	echo -e "Proceed to deploy...";
	sleep 1
	echo -e "Invoking Rocketeer script...";
	sleep 1
	echo -e "Please have your Produciton Key ready...";
	sleep 1
	php ../../../artisan deploy -v --on='production' --stage='production'
else
	echo "Wrong code.";
fi
