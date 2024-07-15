FROM php:8.2-fpm-alpine

# Instale dependências necessáris
RUN apk --no-cache add autoconf build-base libtool

# Instale a extensão PCOV
RUN pecl install pcov && docker-php-ext-enable pcov

# Instale a extensão Mysql
RUN docker-php-ext-install pdo pdo_mysql

# Instale a extensão MongoDB
#RUN pecl install mongodb
#RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Limpe o cache
RUN apk del autoconf build-base libtool

# Defina o diretório de trabalho
WORKDIR /app

# Copie o código fonte para o container
COPY / /app

# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
