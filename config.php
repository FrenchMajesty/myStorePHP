<?php
/// Code by Verdi.K
///
/// 2017 Copyright All rights reserved.

$sitename = "Bloomify";
$sitelink = "http://verdiks-macbook-air-2.local/nstore";
$dbConfig = [
    "host" => "localhost",
    "username" => "root",
    "password" => "",
    "dbname" => "store",
];

spl_autoload_register(function ($classname) {
	$classname = str_replace("\\","/", $classname);
	$class = "src/" . $classname . ".php";
	require_once($class);
});


// Initialize DB Connection
$Database = new Core\Database($dbConfig);
$Database->getConnection();
?>
