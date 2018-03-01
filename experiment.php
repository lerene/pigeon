<?php

echo "Welcome to Washington Digital Media \n";

date_default_timezone_set('America/New_York');

echo "\n New line. \n";
echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);

?>