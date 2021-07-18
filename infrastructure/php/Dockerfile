FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ARG UID=1000
ARG GID=1000
RUN useradd -m -u ${UID} docker

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.1.3 /usr/bin/composer /usr/bin/composer

COPY ./php.ini /usr/local/etc/php/php.ini

RUN apt-get update && \
  apt-get -y install git unzip vim libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath

USER ${UID}:${GID}

WORKDIR /var/www