<?php

include('dbConfig.php');


if (isset($_POST['restaurant_id'])) {
   echo 'attempting to delete row ';
    echo $_POST['restaurant_id'];
} else {
    // Fallback behaviour goes here
}


$link = mysqli_connect("localhost", "root", "", "soup");


 $sql = "DELETE FROM restaurant WHERE name = '".$restaurant."'";
 $sql .= "VALUES ('".$_POST["restaurant_name"]."','".$_POST["restaurant_address"]."')";

    $result = mysqli_query($link, $sql);

?>


<a href="index.php">Main page</a>
<a href="reviews.php">Add another restaurant</a>
