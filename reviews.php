<h1 id="top-heading">Life in Rosslyn, Arlington
 </h1>

 <div>
 	
 
 	<form action="process.php" method="POST">
         Restaurant name: <input type = "text" name = "restaurant_name" />
         <br>
         Restaurant address: <input type = "text" name = "restaurant_address" /> 
         <br>
         Restaurant contact: <input type="number" name = "restaurant_phone" />
         <br>
         Customers' rating: <input type = "number" name = "customers_rating" 
         />
         <input type="submit" name="submit" value="Add Restaurant" />


 	</form>

 </div>

<?php

	include('dbConfig.php');

$query="SELECT * FROM soup";
	 	// $results = mysql_query($query);
		$results = mysqli_query($conn, $sql);
?>

<div>
	<?php
	while ($row = mysql_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
	?>
</div>

