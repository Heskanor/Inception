chmod -R 755 /var/www/html
chown www-data:www-data /var/www/html

service php7.3-fpm start
service php7.3-fpm stop

echo "Starting php7.3-fpm in the foreground"
php-fpm7.3 -F -R