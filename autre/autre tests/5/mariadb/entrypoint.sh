mariadb-install-db
service mariadb start
sleep 2
if [ ! -d /var/lib/mysql/$DATABASE_NAME ]
then
mariadb -e "
CREATE DATABASE $DATABASE_NAME;
CREATE USER '$DATABASE_USER'@'%' IDENTIFIED BY '$DATABASE_USER_PASSWORD';
GRANT ALL PRIVILEGES ON $DATABASE_NAME.* TO '$DATABASE_USER'@'%';
ALTER USER 'root'@'localhost' IDENTIFIED BY '$DATABASE_ROOT_PASSWORD';
FLUSH PRIVILEGES;
"
fi
mysqladmin shutdown -p$DATABASE_ROOT_PASSWORD
exec mariadbd-safe
