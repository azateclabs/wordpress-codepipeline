#!/bin/bash
rm -rf /var/www/html/wp-config.php
cp -pr /var/www/html/codedeploy/wp-config.php /var/www/html/wp-config.php
chown -R apache:apache /var/www/html
chmod -R 755 /var/www/html
