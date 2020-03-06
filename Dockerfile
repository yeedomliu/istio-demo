FROM php:7.4.3-cli-alpine
MAINTAINER 36749952@qq.com
COPY . /data/app
WORKDIR /data/app
CMD ["php", "-S 0.0.0.0:80", "-t ./"]
