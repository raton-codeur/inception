FROM debian:bullseye

ARG SSL_CONTAINER_PATH DOMAIN_NAME WORDPRESS_CONTAINER_PATH

RUN apt update && \
	apt install -y nginx openssl

RUN mkdir -p $SSL_CONTAINER_PATH && \
	openssl req -x509 -nodes \
		-out $SSL_CONTAINER_PATH/server.crt \
		-keyout $SSL_CONTAINER_PATH/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=$DOMAIN_NAME"

RUN apt update && \
	apt install -y php-fpm php-mysql wget && \
	mkdir /run/php && \
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY entrypoint.sh /
COPY wordpress.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY nginx.conf /etc/nginx/conf.d/https.conf

ENTRYPOINT ["bash", "/entrypoint.sh"]
