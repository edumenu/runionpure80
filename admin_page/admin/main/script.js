 $(document).ready(function(){
    //Get request for dashboard page
    $.get("../includes/dashboard_get.php", function(data, status){
     //Checking for errors
         if(status == '404'){
             alert('Requested page not found. [404]');
         }else if(status == '500'){
               alert('Internal Server Error [500]');
         }else{
            //Parsing the json array 
            var views = jQuery.parseJSON(data);
            //Assigning the obtained values 
            $(".home_views").html(views['index.php']);
            $(".shop_views").html(views['shop.php']);
         }
    });
 }); 