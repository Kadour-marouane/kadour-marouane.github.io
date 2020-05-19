<?php 
// DB credentials.
define('DB_HOST','');
define('DB_USER','');
define('DB_PASS','');
define('DB_NAME','');
$options = array(
   PDO::MYSQL_ATTR_SSL_CA => __DIR__.'/BaltimoreCyberTrustRoot.crt.pem'
);
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,$options);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
