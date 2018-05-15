<?php include "header.php"?>

 <div class="wrapper">
       
       <!-- Side navigation -->
       <?php include "../includes/sidenav.php"?>
       <!-- /Side navigation -->
  
        <div class="main-panel">
         
           <!-- Top navbar -->
       <?php include "../includes/topnav.php"?>
       <!-- /Top navbar -->
          
         <div class="alert alert-success" role="alert"><h1>List of all products</h1></div> 
         
          <!-- Table for products -->          
 <div class="table-responsive">
  <table class="table table-shopping">
          <thead>
              <tr>
                  <th class="text-left">Image</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Price</th>
                  <th class="text-right">Number of views</th>
                  <th class="text-right">Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      <div class="img-container">
                          <img src="https://images.thenorthface.com/is/image/TheNorthFace/NF0A2VFL_619_hero" alt="...">
                      </div>
                  </td>
                  
                  <td>
                     <p class="text-center">Red Jacket</p>
                  </td>
                  
                  <td>
                      <p class="text-center">$300</p>
                  </td>
                     
                  <td class="text-right">
                     <button type="button" rel="tooltip" class="btn btn-info btn-sm">
                        <i class="material-icons">pageview</i>   10
                    </button>
                  </td>
                  
                   <td class="td-actions text-right">
                    <button type="button" rel="tooltip" class="btn btn-success">
                        <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                    </button>
                  </td>
              </tr>
          </tbody>
  </table>
 </div>
     
<?php include "footer.php"?>