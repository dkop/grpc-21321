FROM php:7.4-cli

RUN apt-get update && apt-get install -y zlib1g-dev

ARG GRPC_VERSION
RUN pecl install grpc-${GRPC_VERSION}
RUN docker-php-ext-enable grpc
COPY grpc.ini $PHP_INI_DIR/conf.d/docker-php-ext-grpc.ini

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

CMD [ "php", "./grpc.php" ]