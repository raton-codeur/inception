test :
	docker build -t wordpress srcs/requirements/wordpress && docker run -it --rm wordpress

clean :
	docker rmi wordpress


all :
	echo "127.0.0.1 qhauuy.42.fr" >> /etc/hosts
	echo "127.0.0.1 www.qhauuy.42.fr" >> /etc/hosts
	docker compose -f srcs/docker-composer.yml build

