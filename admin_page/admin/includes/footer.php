<!--  ******Footer****  -->
            <footer class="footer" style="position: fixed; bottom: 0;">
<!--
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
-->
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {side

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        
    $("#update_success").on("click", function(){
       //Making an ajax request to display a message after a change has been made
        $.ajax({
          method: "POST",
          url:"about.php",
          success: function()
            {
                //Showing the update message after the page has finished loading 
                localStorage.setItem("Status",1)
                window.location.reload();
            }
        });
        
    });  
    
        
   $(document).ready(function(){
    //get it if Status key found
    if(localStorage.getItem("Status"))
    {
        toastr.success('update successfully', {timeOut: 500}, {"positionClass": "toast-bottom-right"});
        localStorage.clear();
    }
   });     
    </script>
        
     <script>

   $(document).ready(function(){

        $(".delete_link").on('click', function(){

        var id = $(this).attr("rel");  //Obtaining the post id from rel attribute
//        var name = $(this).attr("id");

//        $("#myModal").modal('show');  //Display the modal

//        //Displaying the user's name to be deleted
//        document.getElementById('name').innerHTML = name;
        document.getElementById('modal_delete_link').setAttribute("value",id);  //Set post id to the attribute value 
        console.log(id);
     });

   });

 </script>

</html>
