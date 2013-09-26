<?php
// CONSTANTS USED BY THE SCRIPTS.  CHECK EACH TO SEE IF IT IS NULL. IF SO, SET THE VALUE.
defined('DB_SERVER') ? null : define("MYSQL_SERVER", "localhost");  //  server that mysql is hosted
defined('DB_USER') ? null : define("MYSQL_USER", "user");  //  user name
defined('DB_PASS') ? null : define("MYSQL_PASS", "password");  //  the password
defined('DB_NAME') ? null : define("MYSQL_NAME_OF_DB", "database_name");  //  the name of the database were intefacing
?>