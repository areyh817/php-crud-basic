mysql> create table score(
    -> id int auto_increment primary key,
    -> name varchar(20) not null,
    -> java int,
    -> spring int,
    -> db int,
    -> react int
    -> );
Query OK, 0 rows affected (0.05 sec)

mysql> desc score;
+--------+-------------+------+-----+---------+----------------+
| Field  | Type        | Null | Key | Default | Extra          |
+--------+-------------+------+-----+---------+----------------+
| id     | int         | NO   | PRI | NULL    | auto_increment |
| name   | varchar(20) | NO   |     | NULL    |                |
| java   | int         | YES  |     | NULL    |                |
| spring | int         | YES  |     | NULL    |                |
| db     | int         | YES  |     | NULL    |                |
| react  | int         | YES  |     | NULL    |                |
+--------+-------------+------+-----+---------+----------------+
6 rows in set (0.01 sec)