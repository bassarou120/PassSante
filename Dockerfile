FROM ubuntu:16.04
ADD . /app
RUN apt-get update
RUN apt-get install -y php apache2 libapache2-mod-php7.0 php-mysql php-intl git git-core curl php-curl php-xml composer zip unzip php-zip
# Configure Apache
RUN rm -rf /var/www/* \
    && a2enmod rewrite \
    && echo "ServerName localhost" >> /etc/apache2/apache2.conf
ADD vhost.conf /etc/apache2/sites-available/000-default.conf
# Install Symfony
RUN mkdir -p /usr/local/bin
RUN curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
RUN chmod a+x /usr/local/bin/symfony
# Add main start script for when image launches
ADD run.sh /run.sh
RUN chmod 0755 /run.sh
WORKDIR /app
EXPOSE 80
CMD ["/run.sh"]


#
#FROM php:7.2-apache
#
#RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
#
#RUN apt-get update \
#    && apt-get install  -qq -y --no-install-recommends \
#    cron \
#     vim \
#     locales coreutils apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev;
##RUN apt-get update \
##    && apt-get install  -qq -y --no-install-recommends \
##    cron \
##     vim \
##     locales coreutils apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev;
#
#RUN apt-get install wget
#
#
#
#
#RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
#    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
#    locale-gen
#
##RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
##   mv composer.phar /usr/local/bin/composer
##RUN  curl -sS https://getcomposer.org/installer | php -- --2.2
##RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
#RUN wget https://getcomposer.org/download/2.0.9/composer.phar \
#    && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer
#
#RUN docker-php-ext-configure intl
#RUN docker-php-ext-install pdo pdo_mysql mysqli gd opcache intl zip calendar dom mbstring zip gd  xsl && a2enmod rewrite
#RUN pecl install apcu && docker-php-ext-enable apcu
#
#ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
#
#RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
#    install-php-extensions amqp
#
#
#
#WORKDIR /var/www/html
#
#COPY . /var/www/html
#
#RUN composer install --ignore-platform-reqs
#
#
#




## Dockerfile
#FROM php:7.2-cli
#
#RUN apt-get update -y && apt-get install -y libmcrypt-dev
#
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN docker-php-ext-install pdo mbstring
#
#WORKDIR /app
#COPY . /app
#
##RUN composer install  --ignore-platform-reqs
#
#EXPOSE 8000
#CMD php bin/console server:run 0.0.0.0:8000
#





##https://inovector.com/blog/minimal-configuration-docker-to-run-laravel-application
#FROM php:7.2-apache
#
#RUN apt-get update && apt-get install -y \
#    		libfreetype6-dev \
#    		libpng-dev \
#    		libwebp-dev \
#    		libjpeg62-turbo-dev \
#    		libmcrypt-dev \
#    		libzip-dev \
#            zip \
#    		git \
#    		nano \
#
#    && docker-php-ext-install \
#    pdo_mysql \
#    gd \
#    zip \
#    bcmath \
#    && a2enmod \
#    rewrite
#
## Add the user UID:1000, GID:1000, home at /app
##RUN groupadd -r app -g 1000 && useradd -u 1000 -r -g app -m -d /app -s /sbin/nologin -c "App user" app && \
##    chmod 755 /var/www/html
#
#RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
#
##upload
#RUN echo "file_uploads = On\n" \
#         "memory_limit = 500M\n" \
#         "upload_max_filesize = 500M\n" \
#         "post_max_size = 500M\n" \
#         "max_execution_time = 600\n" \
#         > /usr/local/etc/php/conf.d/uploads.ini
#
##USER app
#
#WORKDIR /var/www/html
#
### Copy existing application directory contents to the working directory
#COPY . /var/www/html
#
#RUN composer install --ignore-platform-reqs
#
#
##RUN unzip vendor.zip
#
#
#
#USER root
#
#COPY default.conf /etc/apache2/sites-enabled/000-default.conf
#
#CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
#
#EXPOSE 80
