<?php
/// Code by Verdi.K
///
/// 2017 Copyright All rights reserved.

$router = new Core\AltoRouter();

$router->setBasePath("/");

$router->map("GET", "/", function() {
    echo 'Index page';
});

$router->map("GET", "/poop", function() {
    echo 'Success';
});

echo 'Well?';
?>
