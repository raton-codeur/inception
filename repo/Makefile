up :
	docker compose -f srcs/docker-compose.yml up -d

down :
	docker compose -f srcs/docker-compose.yml down

clean :
	docker stop $$(docker ps -qa); docker rm $$(docker ps -qa); docker rmi -f $$(docker images -qa); docker volume rm $$(docker volume ls -q); docker network rm $$(docker network ls -q) 2>/dev/null; rm -rf ../volumes/database/*; rm -rf ../volumes/wordpress/*

kill :
	docker compose -f srcs/docker-compose.yml down --timeout 0; make clean


top/% :
	docker top $*

bash/% :
	docker compose -f srcs/docker-compose.yml exec $* bash
