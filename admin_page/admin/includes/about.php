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
        
        //Redirecting user
//        redirect("");
        
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
            <form action="" method="post">
                
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about_content"><?php echo $about_content ?></textarea>
            </div>
            
              
            <div class="form-group">
              <input class="btn btn-primary" type="submit" name="update_about" value="Update About Content">
            </div>
                        
            </form>
            <!-- /Form -->
            
          </div>
        </div>
     
<?php include "footer.php"?>