FROM debian:12

RUN apt-get update && apt-get install -y apache2 libapache2-mod-php8.2

RUN ln -sf /dev/stderr /var/log/apache2/error.log

RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring

EXPOSE 80
EXPOSE 443

RUN a2enmod ssl 
RUN a2enmod rewrite
RUN echo "php_zip.dll=on" >> /etc/php/8.2/apache2/php.ini

WORKDIR /app

ENTRYPOINT [ "apache2ctl", "-D", "FOREGROUND"]
