FROM debian:bullseye

RUN	apt update && apt install -y nginx openssl && \
	mkdir -p $SSL_DIR && \
	openssl req -x509 -nodes \
		-out $SSL_DIR/server.crt \
		-keyout $SSL_DIR/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=$DOMAIN_NAME"

COPY nginx.conf /etc/nginx/conf.d/https.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]
