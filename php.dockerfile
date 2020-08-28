FROM php:7.3-apache

RUN apt-get update && apt-get upgrade -y && apt install -y libpng-dev libmagickwand-dev \
&& docker-php-ext-install calendar gd pdo pdo_mysql mysqli exif mbstring

RUN pecl install imagick && docker-php-ext-enable imagick

# Workaround for write permission on write to MacOS X volumes
# See https://github.com/boot2docker/boot2docker/pull/534
RUN usermod -u 1000 www-data \
# Enable Apache mod_rewrite
&& a2enmod rewrite \
# Enable Apache mod_rewrite
&& a2enmod headers \
# Enable Apache mod_rewrite
&& a2enmod expires

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

#COPY ./wordpress /var/www/html