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

$query="SELECT * FROM soup";
$results = mysql_query($query);

<div>
	while ($row = mysql_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
</div>


      <!-- pseudo code -->

      <!-- first get rows of data from table restaurant -->

      <!-- then start a php loop -->

      <!-- inside the loop, show all the rows using print or echo -->