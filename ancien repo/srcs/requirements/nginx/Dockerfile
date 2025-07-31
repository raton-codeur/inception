FROM debian:bullseye

RUN	apt update && \
	apt install -y nginx openssl && \
	mkdir -p /etc/nginx/ssl && \
	openssl req -x509 -nodes \
		-out /etc/nginx/ssl/server.crt \
		-keyout /etc/nginx/ssl/private.key \
		-subj "/C=FR/ST=Alsace/L=Mulhouse/O=42/OU=42Mulhouse/CN=qhauuy.42.fr" && \
	apt clean && \
	rm -rf /var/lib/apt/lists/*

COPY conf/nginx.conf /etc/nginx/conf.d/https.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]
