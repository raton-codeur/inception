
mysqld_safe &
sleep 1

mysql -e "
CREATE DATABASE IF NOT EXISTS db;
CREATE USER IF NOT EXISTS 'u'@'localhost' IDENTIFIED BY 'mdp';
GRANT ALL PRIVILEGES ON db.* TO 'u'@'localhost';
ALTER USER 'root'@'localhost' IDENTIFIED BY 'mdp';
FLUSH PRIVILEGES;
"

mysqladmin -pmdp shutdown

exec mysqld_safe
