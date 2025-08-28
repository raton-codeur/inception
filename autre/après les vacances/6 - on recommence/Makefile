up :
	docker compose up -d

down :
	docker compose down

clean :
	docker stop $$(docker ps -qa); docker rm $$(docker ps -qa); docker rmi -f $$(docker images -qa); docker volume rm $$(docker volume ls -q); docker network rm $$(docker network ls -q) 2>/dev/null; rm -rf volumes/database/*; rm -rf volumes/wordpress/*

test :
	docker compose down --timeout 0; docker stop $$(docker ps -qa); docker rm $$(docker ps -qa); docker rmi -f $$(docker images -qa); docker volume rm $$(docker volume ls -q); docker network rm $$(docker network ls -q) 2>/dev/null; rm -rf volumes/database/*; rm -rf volumes/wordpress/*; docker compose up -d



top/% :
	docker top $*

# bash/% :
# 	docker compose exec $* bash

bash :
	docker compose exec my_service bash