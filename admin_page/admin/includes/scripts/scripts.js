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
        //Calling the toastr alert
        toastr.success('update successfully', {timeOut: 500}, {"positionClass": "toast-bottom-right"});
        localStorage.clear();
    }
        
      //Delete modal
        $(".delete_link").on('click', function(){

        var id = $(this).attr("rel");  //Obtaining the post id from rel attribute
        document.getElementById('modal_delete_link').setAttribute("value",id);
     });
       
       //Reset modal
        $(".reset_link").on('click', function(){

        var id = $(this).attr("rel");  //Obtaining the post id from rel attribute
        document.getElementById('modal_reset_link').setAttribute("value",id);
     });      
       
   });
        
        
    function myFunction(){
         //Loading screen for the main page   
    var div_box = "<div id='loading'></div>";
     //Adding/appending the load screen to the body of the page   
     $("#loader").prepend(div_box);
     //Remove loading screen after 7 miliseconds   
     $('#loading').delay(10).fadeOut(600, function(){
        $(this).remove(); 
     });  
    }