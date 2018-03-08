<h1 id="top-heading">Life in Rosslyn, Arlington
 </h1>

 <div>
 	
 
 	<form action="process.php" method="POST">
         Restaurant name: <input type = "text" name = "restaurant_name" />
         <br>
         Restaurant address: <input type = "text" name = "restaurant_address" /> 
         <br>
         <input type="submit" name="submit" value="Add Restaurant" />


 	</form>

 </div>

<?php

$link = mysqli_connect("localhost", "root", "", "soup");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM restaurant";


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Restaurant</th>";
                echo "<th>Address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['restaurant_id'] . "</td>";
                echo "<td>" . $row['restaurant_name'] . "</td>";
                echo "<td>" . $row['restaurant_address'] . "</td>";
           		echo "<td><a href='delete.php'> </a> </td>";
			
	


            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

 <div>
 	
 
 	<form action="delete.php" method="POST">
         Restaurant id: <input type = "number" name = "restaurant_id" />
         <br>
       
         <input type="submit" name="submit" value="Delete Restaurant" />


 	</form>

 </div>

