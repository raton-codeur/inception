test :
	docker run -d -p 8080:80 -v ./my_site:/usr/share/nginx/html --name nginx_container nginx
	curl localhost:8080

clean :
	docker stop nginx_container
	docker rm nginx_container
	docker rmi nginx
