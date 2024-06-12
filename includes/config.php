<?php 
// load .env
$env = parse_ini_file(__DIR__ . '/../.env');

if ($env === false) {
    exit("Error: Unable to read the .env file");
}

// DB credentials.
define('DB_HOST',$env["DB_HOST"]);
define('DB_USER',$env["DB_USER"]);
define('DB_PASS',$env["DB_PASS"]);
define('DB_NAME',$env["DB_NAME"]);
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>