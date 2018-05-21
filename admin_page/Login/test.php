<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Toastr.js -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>

    
<button id='get-data'>Click</button>
<p id='data'></p>

<?php 
    
    $counter = 0;
    while($counter <= 20 ){

        if($counter % 4 == 0 || $counter ==0){
            echo "..."; 
        }
        echo "{$counter}";

        if($counter % 4 == 0 || $counter ==0){
            echo "..."; 
        }
        $counter++;
    }
  
?>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

   $(document).ready(function(){
       
       var count = 2;
       
      $('#get-data').click(function(){
         $.get('test2.php', {'key' : '56'} ,function(data){
            $('#data').html(data);
         });
      });

   });

 </script>
</body>
</html>