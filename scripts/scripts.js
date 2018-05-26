   $(document).ready(function(){
        //Changing the images in the modal when the user selects an image
        $(".prod").on('click', function(data){
            
            var id = $(this).attr("rel");  //Obtaining the name of the image selected
            var new_img = 'admin_page/admin/includes/images/';  //Image template
            var default_img = 'default.png';
            //Ajax get request to product_modal.php
             $.get('includes/product_modal.php', {'key' : id} ,function(data,status){
                 //Checking for errors
                 if(status == '404'){
                     alert('Requested page not found. [404]');
                 }else if(status == '500'){
                       alert('Internal Server Error [500]');
                 }else{
                     //Parsing the JSON object
                     var prod = jQuery.parseJSON(data);

                     //Dynamically changing the image src's
                     $('#prod_im11').attr('src',new_img + prod.product_image_1);
                     //Image for the modal 'add to cart' button
                     $('#prod_button').attr('data-image',new_img + prod.product_image_1);
                     $('#prod_im12').attr('src',new_img + prod.product_image_2);
                     $('#prod_im21').attr('src',new_img + prod.product_image_1);
                     $('#prod_im22').attr('src',new_img + prod.product_image_2);
                     $('#prod_name').html(prod.product_name);
                     //Name of modal 'add to cart' button
                     $('#prod_button').attr('data-name',prod.product_name);
                     $('#product_price').html('$' + prod.product_price);
                     //Price for the 'add to cart' button
                     $('#prod_button').attr('data-cost',prod.product_price);
                    $('#prod_description').html(prod.product_description);
                    //Price for the 'add to cart' button
                    $('#prod_button').attr('data-id',prod.product_id);   
                 }
            });     
     });

   });