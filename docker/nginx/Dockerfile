FROM nginx:1.19

COPY default.conf /etc/nginx/conf.d

COPY ssl/*.pem /etc/nginx/certs/

WORKDIR /usr/share/nginx/html