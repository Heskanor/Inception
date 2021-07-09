FROM debian:buster

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get -y install wget
#RUN add-apt-repository ppa:ondrej/php -y
RUN apt -y install php7.3-fpm php7.3-common php7.3-mysql php
#WORDPRESS
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN mkdir -p /var/www/html/
RUN mv wordpress/* /var/www/html/

COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY wp-config.php /var/www/html/wp-config.php
COPY wordpress.sh .

CMD ["sh", "wordpress.sh"]