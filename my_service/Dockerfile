FROM debian:bullseye

RUN apt update && apt install -y nginx openssl

RUN apt update && \
	apt install -y php-fpm php-mysql wget && \
	mkdir /run/php && \
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

RUN apt update && apt install -y mariadb-server

RUN mkdir -p /etc/nginx/ssl && \
	openssl req -x509 -nodes \
		-out /etc/nginx/ssl/server.crt \
		-keyout /etc/nginx/ssl/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=qhauuy.42.fr"

COPY entrypoint.sh /

COPY nginx.conf /etc/nginx/conf.d/https.conf

COPY wordpress.conf /etc/php/7.4/fpm/pool.d/www.conf

COPY mariadb.conf /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["bash", "/entrypoint.sh"]
