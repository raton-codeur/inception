# tester le service nginx
# test :
# 	docker build -t nginx_image nginx_folder
# 	docker run -d -p 80:80 --name nginx_container nginx_image
# 	sleep 1
# 	curl http://localhost

# clean :
# 	docker stop nginx_container
# 	docker rm nginx_container
# 	docker rmi nginx_image



# tester le service postgres
# test :
# 	docker build -t postgres_image postgres_folder
# 	docker run -d -p 5432:5432 -v ./postgres_folder/postgres_volume:/var/lib/postgresql/data -e POSTGRES_PASSWORD=1234 --name postgres_container postgres_image
# 	sleep 2
# 	psql -h localhost -U postgres
# 	# mot de passe : 1234
# 	# rentrer le sql du fichier base.sql

# clean :
# 	docker stop postgres_container
# 	docker rm postgres_container
# 	docker rmi postgres_image

# fclean : clean
# 	rm -rf postgres_folder/postgres_volume/*




test :
	docker compose up -d
	sleep 2
	curl http://localhost
	psql -h localhost -U u -W db
	# mdp : 1234
	# rentrer le sql du fichier base.sql

clean :
	docker compose down
	docker rmi nginx_image postgres_image

fclean :
	rm -rf postgres_folder/postgres_volume/*

