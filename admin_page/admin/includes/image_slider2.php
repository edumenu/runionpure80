<!DOCTYPE html>
<html lang="en">
<head>
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
    
    //Obtaing data from the form
    if(isset($_POST['add_slider'])){
        $slider_image = $_FILES['image']['name'];
        //Creating a temporary variable to contain the image
        $slider_image_temp = $_FILES['image']['tmp_name'];

        //Moving the uploaded file to a new location in the directory    
        move_uploaded_file($slider_image_temp, "images/$slider_image");

        //Update query from the selected product
        $query = "INSERT INTO slider(slider_image) VALUES ('{$slider_image}')";

        //Sending query and checking for query success
        $result = $connection->query($query);
        confirmQuery($result); 
       }
    
?>

<div class="container">
      <!-- Form -->
      <form action="" method="post" enctype="multipart/form-data">
        
        <!-- Image -->
        <div class="form-group">
          <table>
           <tr>
             <th>Slider image:</th>
            </tr>
           <tr>
           <!-- Image 1 -->
           <td>
             <input type="file" class="form-control-file" name="image">
           </td>
           </tr>
         </table>

        </div>
        <!-- /Image-->
        

        <button id="add_product" type="submit" class="btn btn-success" name="add_slider">Submit</button>
     </form><br><br>
     
     
     
<div class="table-responsive">  
    <!-- Table for image sliders -->          
    <table class="table table-bordered">
        <thead  style="background-color: #A23AB5;color: white;">
            <tr>

                <th class="text-center">Image</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>

           <?php

            //Obtaining all the products from the database
            $query = "SELECT * FROM slider";
            $result = $connection->query($query);
            confirmQuery($result);
            $num_rows = mysqli_num_rows($result);

            if($num_rows == 0){
                //Display a notification when there are no slider images
                echo "<div class='alert alert-danger text-center' role='alert'> There are no slider images!</div>";
            }else{

            while($row = mysqli_fetch_assoc($result)) {
              $slider_id = $row['slider_id'];
              $slider_image = $row['slider_image'];
            ?>
            <col width="130">
           <col height="100">
            <tr>
                <td class="col-sm">
                 <div class="img-container">
                    <img class='img-responsive' src='images/<?php echo $slider_image?>' alt='...'>
                  </div>
                 </td>
                <td class="td-actions text-right">
                    <button id="edit" type="button" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">Edit</i>
                    </button>
                    <?php echo "<a title='Delete' rel='{$slider_id}' href='javascript:void(0)' type='button' class='delete_link btn btn-danger' data-toggle='modal' data-target='#myModal' id='delete_link'><i class='material-icons'>close</i></a>"?>
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
            $the_slider_id = escape($_POST['product_id']);

            //Obtaining the id for the image and deleting it in the directory
            if(!empty($the_slider_id)){
                $query = "SELECT * FROM slider WHERE slider_id = '{$the_slider_id}'";
                $result = $connection->query($query);
                //Removing the deleted image from the image directory
                while($row = mysqli_fetch_assoc($result)){
                  $image_slider = $row['slider_image'];
                  $file = 'images/'. $image_slider;
                  unlink($file);    
                } 
            }

            $query = "DELETE FROM slider WHERE slider_id = '{$the_slider_id}'";
            $result = $connection->query($query);
            confirmQuery($result);
            echo "<script>window.top.location.href ='image_slider.php';</script>";

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
            <p>Are you sure you want to delete this product?</p>
            </div>
             
          <div class="modal-footer"> 
           
             <form action="" method="post">
              
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <input id='modal_delete_link' type="hidden" name="product_id" value=""/>

                <button name="delete" value="Delete" type="submit" class="btn btn-danger">Delete</button>
              
             </form>
                    
          </div>

        </div>
     </div>                            
    </div>
   
    </div>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   
 <script>
   //Obating the image slider id to be deleted
   $(document).ready(function(){

        $(".delete_link").on('click', function(){

        var id = $(this).attr("rel");  //Obtaining the post id from rel attribute
        document.getElementById('modal_delete_link').setAttribute("value",id);
     });

   });

 </script>
 

</body>

</html>
