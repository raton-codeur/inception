test :
	cd srcs && docker compose up -d

clean :
	cd srcs && docker compose down --timeout 0 && docker rmi inception-mariadb && docker rmi inception-wordpress && docker rmi inception-nginx
	rm -rf ../volumes/*
