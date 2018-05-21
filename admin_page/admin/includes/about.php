<?php include "header.php"?> <!-- Including the header page -->
<?php include "../../Login/includes/db.php"?>
 
<?php 

    //Obtaining the about content already in the database
    $query = "SELECT * FROM about";
    $result = $connection->query($query);
    confirmQuery($result);  

    while($row = mysqli_fetch_assoc($result)) {
      //Storing the about content into a variable 
      $about_content = $row['about_content'];
    }


    if(isset($_POST['update_about'])){
        //Obtaining the value in the textarea
        $about_content = escape($_POST['about_content']);
        
        //Obtaining the about content already in the database
        $query = "UPDATE about SET about_content = '{$about_content}', about_date = now() WHERE about_id = 1";
        $result = $connection->query($query);
        confirmQuery($result); 
    }
    
?>

 <div class="wrapper">
       
       <!-- Side navigation -->
       <?php include "../includes/sidenav.php"?>
       <!-- /Side navigation -->
  
        <div class="main-panel">
         
           <!-- Top navbar -->
       <?php include "../includes/topnav.php"?>
       <!-- /Top navbar -->
          
         <div class="alert alert-success" role="alert"><h1>About</h1></div> 
         
         <div class="card card-nav-tabs text-center">
           <div class="card-header card-header-primary">
            Edit the about section
           </div>
          <div class="card-body">
           
            <!-- Form -->
            <form action="" method="post" id="foo">
                
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="about_content"><?php echo $about_content ?></textarea>
              </div>
              
            <div class="form-group">
              <button class="btn btn-primary" type="submit" name="update_about" value="Update About Content" id="update_success">Update About</button>
            </div>
                        
            </form>
            <!-- /Form -->
            
            
            <?php
               //Sending a post request to add a credential
               if(isset($_POST['add_cred'])){
                //Obtaining the value in the textarea
                $cred_list = escape($_POST['cred']);
                //Obtaining the about content already in the database
                $query = "INSERT INTO credentials(cred_list) VALUES ('{$cred_list}')";
                $result = $connection->query($query);
                confirmQuery($result); 
                }  
              
            ?>
            
            <!-- Credentials form -->
            <form action="" method="post">
                
             <div class="form-group col-md-6">
              <label for="inputCity">Credentials:</label>
              <input type="text" class="form-control" name="cred">
               <button class="btn btn-primary" type="submit" name="add_cred">Add credentials</button>
             </div>
                    
            </form><br><br>
            <!-- /Credentials form -->
            
            <!-- Credentials table -->
            <div class="table-responsive">         
                <table class="table table-bordered">
                    <thead  style="background-color: #A23AB5;color: white;">
                        <tr>

                            <th class="text-center">Credentials</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php

                        //Obtaining all the products from the database
                        $query = "SELECT * FROM credentials";
                        $result = $connection->query($query);
                        confirmQuery($result);
                        $num_rows = mysqli_num_rows($result);

                        if($num_rows == 0){
                            echo "<div class='alert alert-danger text-center' role='alert'> There are no credentials!</div>";
                        }else{

                        while($row = mysqli_fetch_assoc($result)) {
                          $cred_id = $row['cred_id'];
                          $cred_list = $row['cred_list'];
                        ?>
                        <col width="130">
                       <col height="100">
                        <tr>
                            <td class="col-sm">
                             <p><?php echo $cred_list?></p>
                             </td>
                            <td class="td-actions text-right">
                                <?php echo "<a title='Delete' rel='{$cred_id}' href='javascript:void(0)' type='button' class='delete_link btn btn-danger' data-toggle='modal' data-target='#myModal' id='delete_link'><i class='material-icons'>close</i></a>"?>
                            </td>
                        </tr>

                        <?php } } ?>

                    </tbody>
                </table>
            </div>
            <!-- /Credentials table -->
            
          </div>
        </div>
        
        <?php 
//        //Post request to delete product
        if(isset($_POST['delete'])){
            //Checking to see if its a user
//            if(isset($_SESSION['user_role'])){
                //CHecking to see if user is an admin
//                if($_SESSION['user_role'] == 'admin'){
                    //Obtaining the product id
                    $the_cred_id = escape($_POST['cred_id']);
                    
                    $query = "DELETE FROM credentials WHERE cred_id = '{$the_cred_id}'";
                    $result = $connection->query($query);
                    confirmQuery($result);
                    echo "<script>window.top.location.href ='about.php';</script>";
                    
                }
            //}
        //}
         
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
                <p>Are you sure you want to delete this credential?</p>
                </div>

              <div class="modal-footer">

                 <form action="" method="post">


                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <input id='modal_delete_link' type="hidden" name="cred_id" value=""/>

                    <button name="delete" value="Delete" type="submit" class="btn btn-danger">Delete</button>

                 </form>

              </div>

            </div>
         </div>
        </div>
     
<?php include "footer.php"?>