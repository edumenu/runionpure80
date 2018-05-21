<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

              <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        
                        <?php
                        if($_SESSION['user_role'] == 'admin' ){
                          echo $_SESSION['firstname']; echo $_SESSION['lastname'];   
                        }else{
                            header("Location: ../../Login/index.php");
                        }
                        
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" data-color="green">
                        <a class="dropdown-item" href="../includes/profile.php">Edit profile</a>
                        <!-- <a class="dropdown-item" href="../includes/logout.php">Sign out</a>-->
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Sign out</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
        <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
      </div>
    </div>
  </div>
</div>


<script>
//Logout user out of the page
function logout(){
    location.href = "../includes/logout.php";
}
</script>