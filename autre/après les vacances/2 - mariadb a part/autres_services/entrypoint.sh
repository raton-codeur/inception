
nginx

sleep 5

cd $WORDPRESS_CONTAINER_PATH
if [ ! -f index.php ]
then
	tar -xzf /wordpress-6.5.4-fr_FR.tar.gz --strip-components=1
	chown -R www-data:www-data wp-content
	wp config create \
		--allow-root \
		--dbname=$DATABASE_NAME \
		--dbuser=$DATABASE_USER \
		--dbpass=$DATABASE_USER_PASSWORD \
		--dbhost=mariadb
	wp core install \
		--allow-root \
		--url="https://$DOMAIN_NAME" \
		--title="$WORDPRESS_TITLE" \
		--admin_user=$WORDPRESS_ADMIN \
		--admin_password=$WORDPRESS_ADMIN_PASSWORD \
		--admin_email=$WORDPRESS_ADMIN_EMAIL \
		--skip-email
	wp user create \
		$WORDPRESS_USER \
		$WORDPRESS_USER_EMAIL \
		--allow-root \
		--role=editor \
		--user_pass=$WORDPRESS_USER_PASSWORD
	wp theme install inspiro --activate --allow-root
fi

php-fpm7.4 &

tail -f
