FROM php:fpm

ARG node_ver=14.15.1
ARG node_path=/usr/local/lib/nodejs
ARG node_file_name=node-v${node_ver}-linux-x64

ENV PATH ${node_path}/${node_file_name}/bin:$PATH

RUN apt-get update \
  && apt-get install -y ca-certificates curl xz-utils git libgmp-dev \
  && curl https://nodejs.org/dist/v${node_ver}/${node_file_name}.tar.xz > ${node_file_name}.tar.xz \
  && mkdir -p $node_path \
  && tar xJvf ${node_file_name}.tar.xz -C $node_path

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gmp

COPY php.ini /usr/local/etc/php/

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/src