#!/bin/bash

case $1 in
    'firefox') nohup java -jar selenium-server-standalone-2.52.0.jar > /dev/null 2>&1 &;;
    *) nohup java -jar selenium-server-standalone-2.52.0.jar > /dev/null 2>&1 &;;
esac

