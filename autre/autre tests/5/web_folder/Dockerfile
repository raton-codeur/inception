FROM debian:bullseye

RUN	apt update && apt install -y nginx openssl php-fpm php-mysql wget && \
	mkdir -p /etc/nginx/ssl /var/www/html /run/php && \
	openssl req -x509 -nodes \
		-out /etc/nginx/ssl/server.crt \
		-keyout /etc/nginx/ssl/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=qhauuy.42.fr" && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

EXPOSE 443

COPY nginx.conf /etc/nginx/conf.d/https.conf
COPY index.html /var/www/html/index.html
COPY entrypoint.sh /entrypoint.sh
COPY wordpress.conf /etc/php/7.4/fpm/pool.d/www.conf

# ENTRYPOINT ["nginx", "-g", "daemon off;"]
# ENTRYPOINT ["php-fpm7.4", "-F"]
CMD ["bash", "/entrypoint.sh"]

