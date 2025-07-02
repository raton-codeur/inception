-
dans repo


-
nginx

build l'image :
docker build -t nginx srcs/requirements/nginx

lancer le conteneur en mode interactif :
docker run -it --rm nginx

supprimer l'image :
docker rmi nginx


redéfinir localhost pour qhauuy.42.fr
dans /etc/hosts :
127.0.0.1    qhauuy.42.fr

