FROM debian:bullseye

RUN	apt update && \
	apt install -y mariadb-server && \
	apt clean && \
	rm -rf /var/lib/apt/lists/*

COPY conf/entrypoint.sh /entrypoint.sh

EXPOSE 3306

VOLUME /var/lib/mysql

ENTRYPOINT ["bash", "/entrypoint.sh"]
