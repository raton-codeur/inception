# docker build -t web_image web_folder
# docker run -it --name web_container -p 443:443 web_image bash

# docker build -t database_image database_folder
# docker run -it --name database_container -p 3306:3306 -v ./database_folder/database_volume:/var/lib/mysql database_image bash

# docker compose up -d


test :
	docker compose up -d


# docker run --rm -it web_image bash
# docker run --rm -it database_image bash

# docker compose exec web bash
# docker compose exec mariadb bash

# https://localhost

clean :
	docker compose down --timeout 0; docker stop mariadb_container; docker stop web_container; docker rm mariadb_container; docker rm web_container; docker rmi mariadb_image; docker rmi web_image; rm -rf mariadb/volume/*; rm -rf web_folder/volume/*


