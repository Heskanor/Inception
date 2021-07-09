sed -i "s/127\.0\.0\.1/0\.0\.0\.0/g" /etc/mysql/mariadb.conf.d/50-server.cnf

if [ "$(ls -A /var/lib/mysql/wordpress)" ]; then
    echo "You was here"
else
    service mysql start
    mysql -u root -e "CREATE USER 'wp-user'@'%' IDENTIFIED BY '$DBPASS'"
    mysql -u root -e "CREATE DATABASE wordpress"
    mysql -u root -e "USE wordpress; GRANT ALL PRIVILEGES ON * TO 'wp-user'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES"
    mysql -u root wordpress < /wp.sql
    mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'wp-password';"
fi

mysqld_safe
