FROM debian:bullseye

RUN apt update && \
	apt install -y php-fpm php-mysql wget && \
	mkdir /run/php && \
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz && \
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY entrypoint.sh /

COPY wordpress.conf /etc/php/7.4/fpm/pool.d/www.conf

ENTRYPOINT ["bash", "/entrypoint.sh"]
