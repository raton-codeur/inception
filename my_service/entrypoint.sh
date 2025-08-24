
nginx

if [ ! -f $WORDPRESS_CONTAINER_PATH/wp-config.php ]
then
	tar -xzf /wordpress-6.5.4-fr_FR.tar.gz -C $WORDPRESS_CONTAINER_PATH --strip-components=1
	chown -R www-data:www-data $WORDPRESS_CONTAINER_PATH/wp-content
fi

php-fpm7.4 &

if [ ! -d $DB_CONTAINER_PATH/$DATABASE_NAME ]
then
	mariadb-install-db
	# service mariadb start
	# mariadb -e "
	# 	ALTER USER 'root'@'localhost' IDENTIFIED BY '$DATABASE_ROOT_PASSWORD';
	# 	CREATE DATABASE $DATABASE_NAME;
	# 	CREATE USER '$DATABASE_USER'@'localhost' IDENTIFIED BY '$DATABASE_USER_PASSWORD';
	# 	GRANT ALL PRIVILEGES ON $DATABASE_NAME.* TO '$DATABASE_USER'@'localhost';
	# 	FLUSH PRIVILEGES;
	# "
	# mysqladmin shutdown -p$DATABASE_ROOT_PASSWORD
fi

mariadbd-safe &

tail -f
