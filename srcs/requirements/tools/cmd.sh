apt-get update
apt-get -y upgrade
apt-get -y install nginx
apt-get -y install wget
apt-get -y install default-mysql-server
apt-get -y install php7.3 php-mysql php-fpm php-cli php-mbstring

cp wp-config.php /var/www/html
cp config.inc.php /var/www/html
cp wordpress.sql /var/www/html

#NGINX
cp nginx.conf /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
cd var/www/html/

#PHPMYADMIN
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.1/phpMyAdmin-4.9.1-english.tar.gz
tar xf phpMyAdmin-4.9.1-english.tar.gz && rm -rf phpMyAdmin-4.9.1-english.tar.gz
mv phspMyAdmin-4.9.1-english phpmyadmin
cp config.inc.php phpmyadmin

#WORDPRESS
wget https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wp-config.php /var/www/html/wordpress

#MYSQL
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root
mysql wordpress -u root --password=  < wordpress.sql

#SSL
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=75/L=Paris/O=42/CN=sdunckel' -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt
chown -R www-data:www-data *
chmod 755 -R *
