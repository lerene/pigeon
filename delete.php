<?php

$rabbit = 777;

$house = [
    "foo" => "33",
    "bar" => "22",
];

if (isset($_POST['restaurant_id'])) {

	echo 'attempting to delete row ' . '<br />';
    echo $rabbit .'<br />';
    echo $house['foo'] . '<br />';

    echo $_POST['restaurant_id'];
} else {
    // Fallback behaviour goes here
}

$rest_id = restaurant_id;


$link = mysqli_connect("localhost", "root", "", "soup");


 $sql = "DELETE FROM restaurant WHERE restaurant_id = '".$rest_id."'";

    $result = mysqli_query($link, $sql);

?>


<a href="index.php">Main page</a>
<a href="reviews.php">Add another restaurant</a>
