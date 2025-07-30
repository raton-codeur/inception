php-fpm7.4 &
nginx &

if [ ! -f /var/www/html/wp-config.php ]
then
	wget https://fr.wordpress.org/wordpress-6.5.4-fr_FR.tar.gz
	tar -xzf wordpress-6.5.4-fr_FR.tar.gz -C /var/www/html --strip-components=1
	rm wordpress-6.5.4-fr_FR.tar.gz
	chown -R www-data:www-data /var/www/html
fi

sleep 5
wp config create \
	--allow-root \
	--path=/var/www/html \
	--dbname=$DATABASE_NAME \
	--dbuser=$DATABASE_USER \
	--dbpass=$DATABASE_USER_PASSWORD \
	--dbhost=mariadb

wp core install \
	--allow-root \
	--path=/var/www/html \
	--url="https://localhost" \
	--title="$WORDPRESS_TITLE" \
	--admin_user=$WORDPRESS_ADMIN_USER \
	--admin_password=$WORDPRESS_ADMIN_PASSWORD \
	--admin_email=$WORDPRESS_ADMIN_EMAIL

wp user create \
  $WORDPRESS_USER \
  $WORDPRESS_USER_EMAIL \
  --allow-root \
  --path=/var/www/html \
  --role=administrator \
  --user_pass=$WORDPRESS_USER_PASSWORD

wp theme install inspiro --activate \
	--allow-root \
	--path=/var/www/html

tail -f /dev/null
