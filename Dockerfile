FROM php:latest

ARG WORKDIR="/code"

WORKDIR $WORKDIR

COPY . $WORKDIR/

RUN apt-get update && apt-get install -y \
    wget \
    libzip-dev \
    git \
    zsh \
    vim \
    && docker-php-ext-install zip

RUN sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"

SHELL ["/bin/zsh", "-c"]

RUN echo "source /usr/share/zsh/plugins/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh" >> ~/.zshrc && \
    echo "source /usr/share/zsh/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh" >> ~/.zshrc

RUN wget https://phar.phpunit.de/phpunit-9.6.10.phar \
    && chmod +x phpunit-9.6.10.phar \
    && mv phpunit-9.6.10.phar /usr/local/bin/phpunit

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["zsh"]
