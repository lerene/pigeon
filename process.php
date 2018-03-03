<?php
if (isset($_POST['restaurant_name'])) {
    echo $_POST['restaurant_name'];
} else {
    // Fallback behaviour goes here
}
if (isset($_POST['restaurant_address'])) {
    echo $_POST['restaurant_address'];
} else {
    // Fallback behaviour goes here
}