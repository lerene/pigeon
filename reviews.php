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

	include('dbConfig.php');

$query="SELECT * FROM soup";
	 	// $results = mysql_query($query);
		$results = mysqli_query($conn, $sql);

		if (!$results) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
?>

<div>
	<table>

	<?php

	while ($row = mysqli_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
	?>

	</table>
</div>

