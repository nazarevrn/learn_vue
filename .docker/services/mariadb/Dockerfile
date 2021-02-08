FROM mariadb:10.5.4
RUN service mysql status
RUN mysql -u"$MYSQL_USER" -p"$MYSQL_ROOT_PASSWORD" -h 127.0.0.1 -P 3306 --protocol=tcp
RUN CREATE DATABASE "$MYSQL_DATABASE";
RUN exit;
RUN mysql -u"$MYSQL_USER" -p"$MYSQL_ROOT_PASSWORD" "$MYSQL_DATABASE" < ./gump.sql

RUN service mysql start
