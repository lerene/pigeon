<?php

echo "Welcome to Washington Digital Media \n";

date_default_timezone_set('America/New_York');

echo "\n\r New line. \n\r";
echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);

?>