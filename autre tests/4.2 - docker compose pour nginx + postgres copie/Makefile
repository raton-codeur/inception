test :
    docker build -t nginx_image nginx_folder


# tester le service nginx

# build l'image
# docker build -t nginx_image nginx_folder

# lancer le nginx_container
# docker run -d -p 80:80 --name nginx_container nginx_image

# voir le site
# curl http://localhost

# arrêter le conteneur
# docker stop nginx_container

# supprimer le conteneur
# docker rm nginx_container

# supprimer l'image
# docker rmi nginx_image


# test du service postgres

# lancer le postgresql_container
# docker run -d \
# -e POSTGRES_PASSWORD=1234 -e POSTGRES_USER=u -e POSTGRES_DB=db \
# -p 5432:5432 \
# -v ./postgres_volume:/var/lib/postgresql/data \
# --name postgres_container postgres

# se connecter à la base de données depuis l'hôte
# psql -h localhost -U u -d db


# sql

# CREATE TABLE personne (
#     id INT PRIMARY KEY,
#     nom VARCHAR(100),
#     age INT
# );

# INSERT INTO personne (id, nom, age)
# VALUES (1, 'Alice', 30);

# SELECT * FROM personne;


# arrêter le conteneur
# docker stop postgres_container

# supprimer le conteneur
# docker rm postgres_container

# supprimer l'image
# docker rmi postgres

# supprimer le volume
# rm -rf postgres_volume/*


# -
# avec docker compose

# docker compose up -d

# voir le site
# curl http://localhost

# supprimer les conteneurs et réseau
# docker compose down

# supprimer les images
# docker rmi nginx_image postgres
