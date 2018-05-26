
<!-- Sidenav -->
<div id="loader" class="sidebar" data-color="green" data-background-color="white" data-image="sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="../../../index" class="simple-text logo-normal">
            Home
        </a>
    </div>
    
    <div class="sidebar-wrapper">
        <ul class="nav">
           
           <!-- Adding the active links to the side navigation -->
            <?php 
            
            global $connection;
     
             $currentName = basename($_SERVER['PHP_SELF']);

            if($currentName == 'dashboard.php'){
              echo "<li class='nav-item active'>";
            }else{
                echo "<li class='nav-item'>";
            }
            
            ?>
                <a class="nav-link" href="../main/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <?php 
            
            global $connection;
     
             $currentName = basename($_SERVER['PHP_SELF']);

            if($currentName == 'image_slider.php'){
              echo "<li class='nav-item active'>";
            }else{
                echo "<li class='nav-item'>";
            }
            
            ?>
                <a class="nav-link" href="../includes/image_slider">
                    <i class="material-icons">image</i>
                    <p>Image Slider</p>
                </a>
            </li> 
               
            <?php 

             global $connection;

             $currentName = basename($_SERVER['PHP_SELF']);

             if($currentName == 'about.php'){
               echo "<li class='nav-item active'>";
             }else{
                 echo "<li class='nav-item'>";
             }

            ?>
                <a class="nav-link" href="../includes/about">
                    <i class="material-icons">event_note</i>
                    <p>About/Credentials section</p>
                </a>
            </li>
               
            <?php 
            
            global $connection;
     
             $currentName = basename($_SERVER['PHP_SELF']);

            if($currentName == 'testimonial.php'){
              echo "<li class='nav-item active'>";
            }else{
                echo "<li class='nav-item'>";
            }
            
            ?>
                <a class="nav-link" href="../includes/testimonial">
                    <i class="material-icons">speaker_notes</i>
                    <p>Testimonial Section</p>
                </a>
            </li>
               
            <?php 
            
            global $connection;
     
             $currentName = basename($_SERVER['PHP_SELF']);

            if($currentName == 'transformation.php'){
              echo "<li class='nav-item active'>";
            }else{
                echo "<li class='nav-item'>";
            }
            
            ?>
                <a class="nav-link" href="../includes/transformation">
                    <i class="material-icons">transform</i>
                    <p>Transformation Section</p>
                </a>
            </li>

              <?php 
            
            global $connection;
     
             $currentName = basename($_SERVER['PHP_SELF']);

            if($currentName == 'view_all_products.php' || $currentName == 'add_product.php' ){
              echo "<li class='nav-item dropdown active'>";
            }else{
                echo "<li class='nav-item dropdown'>";
            }
            
            ?>
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="material-icons">shop</i>
               <p>Shop</p>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../includes/view_all_products">View All products</a>
                <a class="dropdown-item" href="../includes/add_product">Add Product</a>
              </div>
            </li>
        
        </ul>
    </div>
</div>