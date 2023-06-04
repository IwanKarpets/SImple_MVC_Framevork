<?php


if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost/MVC_Framework/public');
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
} else {
    define('ROOT', 'http://localhost/MVC_Framework/public');
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
}
