## apache/Dockerfile
FROM debian:12

RUN apt-get update && apt-get install -y php8.2-fpm

#Instalar extensións de php.
RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring php8.2-zip php8.2-intl

EXPOSE 80
EXPOSE 443

WORKDIR /app

ENTRYPOINT [ "php-fpm8.2", "-F"]