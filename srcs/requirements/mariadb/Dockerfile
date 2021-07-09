FROM debian:buster

RUN apt update
RUN apt -y upgrade
RUN apt -y install wget
RUN apt install mariadb-server -y
RUN apt install -y ufw iptables

COPY wp.sql ./
COPY mariadb.sh ./
RUN chmod +x mariadb.sh

CMD ["sh", "mariadb.sh"]