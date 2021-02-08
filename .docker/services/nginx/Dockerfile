FROM debian:buster
WORKDIR /var/www/html
COPY ./ /var/www/html
RUN apt-get update && \
    apt-get install -y \
    software-properties-common wget gnupg2 apt-transport-https \
    openssh-server mc net-tools git && \
    add-apt-repository "deb https://nginx.org/packages/debian/ buster nginx" && \
    wget https://nginx.org/keys/nginx_signing.key && \
    apt-key add nginx_signing.key && \
    apt-get update && \
    apt-get install -y nginx-extras=1.14.2-2+deb10u3 && \
    usermod -u 1000 www-data && \
    chown -R www-data:www-data /var/www && \
    mkdir -p /var/log/nginx/ && \
    touch /var/log/nginx/error.log /var/log/nginx/access.log

COPY .docker/services/nginx/nginx.conf /etc/nginx/ 

WORKDIR /var/www/html

#COPY .docker/services/php/php7.2-fpm.service /lib/systemd/system

EXPOSE 80

CMD ["nginx"]


