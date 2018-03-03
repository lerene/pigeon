<?php
if (isset($_GET['restaurant_name'])) {
    echo $_GET['restaurant_name'];
} else {
    // Fallback behaviour goes here
}
if (isset($_GET['restaurant_address'])) {
    echo $_GET['restaurant_address'];
} else {
    // Fallback behaviour goes here
}