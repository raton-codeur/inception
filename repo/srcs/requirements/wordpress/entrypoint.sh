if [ ! -f $WORDPRESS_CONTAINER_PATH/wp-config.php ]
then
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz
	tar -xzf wordpress-6.5.4-fr_FR.tar.gz -C $WORDPRESS_CONTAINER_PATH --strip-components=1
	rm wordpress-6.5.4-fr_FR.tar.gz
	chown -R www-data:www-data $WORDPRESS_CONTAINER_PATH
	wp config create \
		--allow-root \
		--path=$WORDPRESS_CONTAINER_PATH \
		--dbname=$DATABASE_NAME \
		--dbuser=$DATABASE_USER \
		--dbpass=$DATABASE_USER_PASSWORD \
		--dbhost=mariadb
	wp core install \
		--allow-root \
		--path=$WORDPRESS_CONTAINER_PATH \
		--url="https://$DOMAIN_NAME" \
		--title="$WORDPRESS_TITLE" \
		--admin_user=$WORDPRESS_ADMIN_USER \
		--admin_password=$WORDPRESS_ADMIN_PASSWORD \
		--admin_email=$WORDPRESS_ADMIN_EMAIL
	wp user create \
		$WORDPRESS_USER \
		$WORDPRESS_USER_EMAIL \
		--allow-root \
		--path=$WORDPRESS_CONTAINER_PATH \
		--role=editor \
		--user_pass=$WORDPRESS_USER_PASSWORD
	wp theme install inspiro --activate \
		--allow-root \
		--path=$WORDPRESS_CONTAINER_PATH
fi
php-fpm7.4 -F
