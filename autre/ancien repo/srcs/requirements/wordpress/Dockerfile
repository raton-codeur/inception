FROM debian:bullseye

RUN	apt update && \
	apt install -y php-fpm php-mysql wget && \
	apt clean && \
	rm -rf /var/lib/apt/lists/* && \
	mkdir -p /var/www/html /run/php && \
	cd /var/www/html && \
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz && \
	tar -xzf wordpress-6.5.4-fr_FR.tar.gz --strip-components=1 && \
	rm wordpress-6.5.4-fr_FR.tar.gz && \
	chown -R www-data:www-data /var/www/html && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && \
	mv wp-cli.phar /usr/local/bin/wp


COPY conf/wordpress.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY conf/entrypoint.sh /entrypoint.sh

# ENTRYPOINT ["php-fpm7.4", "-F"]
ENTRYPOINT ["bash", "/entrypoint.sh"]
