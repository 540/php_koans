FROM php:latest

ARG WORKDIR="/code"

WORKDIR $WORKDIR

COPY . $WORKDIR/

RUN apt-get update && apt-get install -y \
    wget \
    libzip-dev \
    git \
    && docker-php-ext-install zip \
    && wget https://phar.phpunit.de/phpunit-9.6.10.phar \
    && chmod +x phpunit-9.6.10.phar \
    && mv phpunit-9.6.10.phar /usr/local/bin/phpunit \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["phpunit", "-c", "phpunit.xml"]
