dans repo


-
pour nginx

build l'image :
docker build -t nginx srcs/requirements/nginx

lancer le conteneur en mode interactif :
docker run -it --rm nginx

supprimer l'image :
docker rmi nginx
-

-
pour mariadb


build l'image :
docker build -t mariadb srcs/requirements/mariadb

lancer le conteneur en mode interactif :
docker run -it --rm mariadb

supprimer l'image :
docker rmi mariadb
-


-
pour wordpress


build l'image :
docker build -t wordpress srcs/requirements/wordpress

lancer le conteneur en mode interactif :
docker run -it --rm wordpress

supprimer l'image :
docker rmi wordpress
-


