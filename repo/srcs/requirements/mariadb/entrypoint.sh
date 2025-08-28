if [ ! -d $DB_CONTAINER_PATH/$DATABASE_NAME ]
then
	mariadb-install-db
	service mariadb start
	sleep 1
	mariadb -e "
		CREATE DATABASE $DATABASE_NAME;
		CREATE USER '$DATABASE_USER'@'%' IDENTIFIED BY '$DATABASE_USER_PASSWORD';
		GRANT ALL PRIVILEGES ON $DATABASE_NAME.* TO '$DATABASE_USER'@'%';
		FLUSH PRIVILEGES;
		"
	sleep 1
	mysqladmin shutdown
fi
exec mariadbd-safe
