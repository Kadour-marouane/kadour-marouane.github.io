<?php 
// DB credentials.
define('DB_HOST','db-prd-1-studev-1.mysql.database.azure.com');
define('DB_USER','k030467j@db-prd-1-studev-1');
define('DB_PASS','ygX7utn6vo');
define('DB_NAME','k030467j');
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