#!/bin/bash

rm -r extern*
ls -l
wget http://www.stygs.com/bsb/extern.bsb.server-development.war
service tomcat8 restart
ls -l
tail -f /var/log/tomcat8/catalina.out