

# nginx

# cd $WORDPRESS_CONTAINER_PATH
# if [ ! -f index.php ]
# then
# 	tar -xzf /wordpress-6.5.4-fr_FR.tar.gz --strip-components=1
# 	wp config create \
# 		--allow-root \
# 		--dbname=$DATABASE_NAME \
# 		--dbuser=$DATABASE_USER \
# 		--dbpass=$DATABASE_USER_PASSWORD \
# 		--dbhost=mariadb
# 	wp core install \
# 		--allow-root \
# 		--url=https://$DOMAIN_NAME \
# 		--title=$WORDPRESS_TITLE \
# 		--admin_user=$WORDPRESS_ADMIN \
# 		--admin_password=$WORDPRESS_ADMIN_PASSWORD \
# 		--admin_email=$WORDPRESS_ADMIN_EMAIL \
# 		--skip-email
# 	wp user create \
# 		--allow-root \
# 		$WORDPRESS_USER \
# 		$WORDPRESS_USER_EMAIL \
# 		--role=editor \
# 		--user_pass=$WORDPRESS_USER_PASSWORD
# fi
# php-fpm7.4 &


# if [ ! -d $DB_CONTAINER_PATH/$DATABASE_NAME ]
# then
# 	mariadb-install-db
# 	service mariadb start
# 	sleep 1
# 	mariadb -e "
# 		CREATE DATABASE $DATABASE_NAME;
# 		CREATE USER '$DATABASE_USER'@'%' IDENTIFIED BY '$DATABASE_USER_PASSWORD';
# 		GRANT ALL PRIVILEGES ON $DATABASE_NAME.* TO '$DATABASE_USER'@'%';
# 		FLUSH PRIVILEGES;
# 		"
# 	sleep 1
# 	mysqladmin shutdown
# fi
# exec mariadbd-safe


tail -f
