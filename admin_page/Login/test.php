<?php session_start();?>
<?php include "test2.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Toastr.js -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>

<?php 
 
// $query = "SELECT * FROM total_view WHERE page = 'test.php'";
 $query = "SELECT SUM(total_visit) FROM total_view WHERE page = index.php";
 $result = $connection->query($query);
  confirmQuery($result);
$row = mysqli_fetch_assoc($result);
//  $num_rows = mysqli_num_rows($result);
 $sum = $row['SUM(total_visit)'];
echo $sum;
?>    

<p>This page has been viewed <?php echo "{$sum}"?> times</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

 </script>
</body>
</html>