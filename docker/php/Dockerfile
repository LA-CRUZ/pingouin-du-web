FROM php:7.3.6-fpm

RUN apt-get update

USER root

RUN docker-php-ext-install pdo_mysql


# Setup the base OS
RUN apt-get update -qq \
 && apt-get install -y --no-install-recommends build-essential  \
    apt-transport-https curl ca-certificates gnupg2 apt-utils nodejs

# Install node from nodesource
# uncomment the next 2 lines for fix
# RUN curl -sL https://deb.nodesource.com/setup_10.x | bash - \
#  && apt-get install -y nodejs

# Install yarn
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
 && echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
 && apt-get update -qq \
 && apt-get install -y yarn

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && mv composer /usr/local/bin/composer

WORKDIR /usr/src/app

COPY apps/my-symfony-app /usr/src/app

RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin

