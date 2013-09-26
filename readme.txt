DATABASE.PHP and CONFIG_DB.PHP
------------------------------
*  The database class opens a connection to the MySQL server for the given settings in the config_db file.  
*  Upon instantiation, the connection is automatically established.  If there are any errors performing this task error messages will be returned from the script.
*  The connection will closed automatically when the object instantiation falls out of scope or when the script finishes.

Remaining Big Ticket Items that need be included
------------------------------------------------
SQL Execution function
Magic quotes to prevent SQL Injection