<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!-- Toastr.js -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>

<?php include "../../Login/includes/db.php"?>
<?php include "../../Login/functions.php"; ?>
<?php 
    
    if(isset($_POST['create_client'])){
        //Obtaining the client data from the form
        $client_name = escape($_POST['client_name']);
        $client_image = $_FILES['image1']['name'];
        //Creating a temporary variable to contain the image
        $client_image_tmp = $_FILES['image1']['tmp_name'];
        
        //Moving the uploaded file to a new location in the directory    
        move_uploaded_file($client_image_tmp, "images/transformation/$client_image");
        
        //Query to send data to the client table
        $query = "INSERT INTO clients(client_name, client_image) VALUES ('{$client_name}','{$client_image}')";
        
        //Sending query and checking for query success
        $result = $connection->query($query);
        confirmQuery($result);
        echo "<script>window.top.location.href ='transformation';</script>";
    }  
?>

<div class="container">
  <!-- Form -->
  <form action="" method="post" enctype="multipart/form-data">
      
        <!-- Product name -->
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter product name" name="client_name">
    </div>
     <!-- /Product name -->
     
      <!-- Image -->
    <div class="form-group">
      <table>
       <tr>
         <th>Upload image</th>
        </tr>
       <tr>
       <td><input type="file" class="form-control-file" name="image1"></td>
       </tr>
     </table>
    </div>
    <!-- /Image-->
   
    <button id="add_product" type="submit" class="btn btn-success" name="create_client">Submit</button>
 </form>
</div><br><br><br>
  
  
  <div class="table-responsive">  
    <!-- Table for image sliders -->          
    <table class="table table-bordered">
        <thead  style="background-color: #A23AB5;color: white;">
            <tr>

                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>

           <?php
            //Obtaining all the products from the database
            $query = "SELECT * FROM clients";
            $result = $connection->query($query);
            confirmQuery($result);
            $num_rows = mysqli_num_rows($result);

            if($num_rows == 0){
                //Display a notification when there are no slider images
                echo "<div class='alert alert-danger text-center' role='alert'> There are transformation imgaes!</div>";
            }else{

            while($row = mysqli_fetch_assoc($result)) {
              $client_id = $row['client_id'];
              $client_name = $row['client_name'];
              $client_image = $row['client_image'];
            ?>
            <col width="130">
           <col height="100">
            <tr>
                <td class="col-sm">
                 <div class="img-container">
                    <img class='img-responsive' src='images/transformation/<?php echo $client_image?>' alt='...'>
                  </div>
                 </td>
                 <td class="text-center"><strong><?php echo $client_name?></strong></td>
                <td class="td-actions text-right">
                    <?php echo "<a title='Delete' rel='{$client_id}' href='javascript:void(0)' type='button' class='delete_link btn btn-danger' data-toggle='modal' data-target='#myModal' id='delete_link'><i class='material-icons'>Delete</i></a>"?>
                </td>
            </tr>

            <?php } } ?>

        </tbody>
    </table>
</div>
  
         
<?php   
    //Post request to delete product
    if(isset($_POST['delete'])){
            //Obtaining the product id
            $the_client_id = escape($_POST['client_id']);

            //Obtaining the id for the image and deleting it in the directory
            if(!empty($the_client_id)){
                $query = "SELECT * FROM clients WHERE client_id = '{$the_client_id}'";
                $result = $connection->query($query);
                //Removing the deleted image from the image directory
                while($row = mysqli_fetch_assoc($result)){
                  $client_image = $row['client_image'];
                  $file = 'images/transformation/'. $client_image;
                  unlink($file);    
                } 
            }

            $query = "DELETE FROM clients WHERE client_id = '{$the_client_id}'";
            $result = $connection->query($query);
            confirmQuery($result);
            echo "<script>window.top.location.href ='transformation';</script>";

        }
  ?>             
                   
       <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
             
            <div class="modal-body">
            <p>Are you sure you want to delete this client?</p>
            </div>
             
          <div class="modal-footer"> 
           
             <form action="" method="post">
              
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <input id='modal_delete_link' type="hidden" name="client_id" value=""/>

                <button name="delete" value="Delete" type="submit" class="btn btn-danger">Delete</button>
              
             </form>
                    
          </div>

        </div>
     </div>                            
    </div>


   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
 <script src="scripts/scripts.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 

</body>

</html>
