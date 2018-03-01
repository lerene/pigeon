<?php
echo "Welcome to Washington Digital Media \n";
$date = '2013-09-30 01:16:06';
$convertDate = date('F jS, Y h:i:s', strtotime($date));
echo $convertDate;
?>