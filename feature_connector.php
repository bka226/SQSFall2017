<?php
/**
* This file makes it easier to develop on multiple machines.
* @author Daniel Dilger
*/

// Commented out Config file. Not needed.
//$config = parse_ini_file( 'config.ini' );


//$features_loader_path =  $_SERVER["DOCUMENT_ROOT"].'/'.'sqsg6/Training_site/features/features_loader.php';

						// Originally /var/www/html/sqsg6/Training_site/features/features_loader.php
$features_loader_path = "Training_site/features/features_loader.php";
require_once($features_loader_path);

?>
