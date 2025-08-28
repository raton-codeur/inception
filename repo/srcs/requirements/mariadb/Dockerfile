FROM debian:bullseye

RUN apt update && apt install -y mariadb-server

COPY entrypoint.sh /

COPY mariadb.conf /etc/mysql/mariadb.conf.d/50-server.cnf

ENTRYPOINT ["bash", "/entrypoint.sh"]
