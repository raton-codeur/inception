

if [ ! -f $WORDPRESS_CONTAINER_PATH/wp-config.php ]
then
	tar -xzf /wordpress-6.5.4-fr_FR.tar.gz -C $WORDPRESS_CONTAINER_PATH --strip-components=1
	chown -R www-data:www-data $WORDPRESS_CONTAINER_PATH/wp-content
fi

nginx
php-fpm7.4 &

tail -f
