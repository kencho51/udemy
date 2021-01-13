FROM centos:7.6.1810

RUN yum -y update && \
yum -y install httpd php

COPY . /var/www/html

CMD ["httpd", "-DFOREGGROUND"]