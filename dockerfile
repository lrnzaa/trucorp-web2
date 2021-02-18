FROM php:7.4-apache

EXPOSE 80

RUN apt-get update
RUN apt-get install nano

RUN chmod 774 -R /var/www/html
RUN chown -R www-data:www-data /var/www/html

COPY count.php /var/www/html

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apachectl restart

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
