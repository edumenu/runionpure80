<?php include "header.php"?>

 <div class="wrapper">
       
       <!-- Side navigation -->
       <?php include "../includes/sidenav.php"?>
       <!-- /Side navigation -->
  
        <div class="main-panel">
         
           <!-- Top navbar -->
       <?php include "../includes/topnav.php"?>
       <!-- /Top navbar -->
          
         <div class="alert alert-success" role="alert"><h1>Edit Profile</h1></div> 
         
         <div class="content">
                <div class="container-fluid">
                
                
                      <form>
<!--
  <div class="form-group">
     <input type="email" class="form-control" id="exampleInput1" placeholder="Enter First name">
  </div>
  
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last name">
  </div>
-->
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>

  <div class="form-group">
     <input type="email" class="form-control" placeholder="Enter Username">
  </div>
  
  <div class="form-group">
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>
  
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter Password">
  </div>
  
  <div class="form-check">
      <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Admin
          <span class="form-check-sign">
              <span class="check"></span>
          </span>
      </label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                
             </div>
         
     
<?php include "footer.php"?>