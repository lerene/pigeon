<?php

include('dbConfig.php');


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

 $sql = "INSERT INTO restaurant (restaurant_name, restaurant_address)
    VALUES ('".$_POST["restaurant_name"]."','".$_POST["restaurant_address"]."')";

    $result = mysqli_query($conn,$sql);

?>

<a href="index.php">Main page</a>
<a href="reviews.php">Add another restaurant</a>