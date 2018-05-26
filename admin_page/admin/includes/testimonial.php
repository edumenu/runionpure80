<?php include "header.php"?> <!-- Including the header page -->
<?php include "../../Login/includes/db.php"?>
 
<?php 

    //Obtaining the about content already in the database
    $query = "SELECT * FROM testimonial";
    $result = $connection->query($query);
    confirmQuery($result);  

    while($row = mysqli_fetch_assoc($result)) {
      //Storing the testimonial content into variables 
      $test_content = $row['test_content'];
      $test_title = $row['test_title'];
    }

    if(isset($_POST['update_test'])){
        //Obtaining the value in the textarea
        $test_content = escape($_POST['test_content']); 
        $test_title = escape($_POST['test_title']);
        
        //Obtaining the about content already in the database
        $query = "UPDATE testimonial SET test_content = '{$test_content}', test_date = now() , test_title = '{$test_title}' WHERE test_id = 1";
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
          
         <div class="alert alert-success" role="alert"><h1>Testimonial</h1></div> 
         
         <div class="card card-nav-tabs text-center">
              <div class="card-header card-header-primary">
               Use this section to edit the testimonial section
              </div>
              <div class="card-body">
                <!-- Form -->
                <form action="" method="post" id="foo">
                  
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Enter Title" name="test_title" value="<?php echo $test_title ?>">
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="test_content"><?php echo $test_content ?></textarea>
                  </div>

                <div class="form-group">
                  <button class="btn btn-primary" type="submit" name="update_test" value="Update Testimonial Content" id="update_success">Update Testimonial</button>
                </div>

                </form>
                <!-- /Form -->
              </div>
          </div>  
         
<?php include "footer.php"?>