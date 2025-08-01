lancer le conteneur nginx avec :
docker run -d -p 8080:80 -v ./mon_site:/usr/share/nginx/html --name test nginx

accéder au site sur l'hôte avec :
curl localhost:8080

stopper le conteneur avec :
docker stop test

supprimer le conteneur avec :
docker rm test
