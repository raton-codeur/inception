FROM debian:bullseye

RUN	apt update && apt install -y mariadb-server

COPY entrypoint.sh /entrypoint.sh
COPY mariadb.conf /etc/mysql/mariadb.conf.d/50-server.cnf

CMD ["bash", "/entrypoint.sh"]
