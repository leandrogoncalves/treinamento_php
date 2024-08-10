FROM php:8.2-fpm-alpine

# Instale dependências necessáris
RUN apk --no-cache add autoconf build-base libtool

RUN pecl channel-update pecl.php.net && pecl install -f uopz

# Instale a extensão PCOV
RUN pecl install pcov && docker-php-ext-enable pcov
RUN docker-php-ext-enable uopz

RUN echo "pcov.directory=/app" >> /usr/local/etc/php/conf.d/docker-php-ext-pcov.ini

RUN apk add curl-dev openssl-dev

# Instale a extensão Mysql
RUN docker-php-ext-install pdo pdo_mysql

# Instale a extensão MongoDB
#RUN pecl install mongodb
#RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Limpe o cache
RUN apk del autoconf build-base libtool

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# Defina o diretório de trabalho
WORKDIR /app

# Copie o código fonte para o container
COPY / /app

# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
