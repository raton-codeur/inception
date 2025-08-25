FROM debian:bullseye

ARG SSL_CONTAINER_PATH DOMAIN_NAME

RUN apt update && apt install -y nginx openssl

RUN mkdir -p $SSL_CONTAINER_PATH && \
	openssl req -x509 -nodes \
		-out $SSL_CONTAINER_PATH/server.crt \
		-keyout $SSL_CONTAINER_PATH/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=$DOMAIN_NAME"

COPY nginx.conf /etc/nginx/conf.d/https.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]
