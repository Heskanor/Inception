FROM debian:buster

RUN apt-get update && apt-get upgrade -y
RUN apt-get -y install wget
RUN apt install nginx -y
COPY nginx.conf /etc/nginx/sites-available/localhost
COPY nginx.sh .

RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=x`75/L=Paris/O=42/CN=ashite' -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt

CMD ["sh", "nginx.sh"]