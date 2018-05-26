<?php include "../../Login/includes/db.php"?>
<?php include "../../Login/functions.php"?>
<?php  
// ********** This file makes a get request to retrieve for the dashboard on the main adminn page***********

//Obtaining all the products from the database
$query = "SELECT * FROM total_view";
$result_home = $connection->query($query);
confirmQuery($result_home);
$views = array();
while($row = mysqli_fetch_assoc($result_home)){
   $page = $row['page'];
   $total_views = $row['total_visit'];
   $views[$page] = $total_views;
} 
echo json_encode($views);
?>