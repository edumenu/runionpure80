<?php session_start();?>
<?php 

$time = $_SERVER['REQUEST_TIME'];

/**
* for a 30 minute timeout, specified in seconds
*/
$timeout_duration = 10;

/**
* Here we look for the user's LAST_ACTIVITY timestamp. If
* it's set and indicates our $timeout_duration has passed,
* blow away any previous $_SESSION data and start a new one.
*/
if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
?>
<script type="text/javascript">
alert("Your session will expire soon!");
</script>
<?php
 
}

/**
* Finally, update LAST_ACTIVITY so that our timeout
* is based on it and not the user's login time.
*/
//$_SESSION['LAST_ACTIVITY'] = $time;



?>
<!DOCTYPE html>
<head>
     <!-- Toastr.js -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>
    <button onclick="toast()">Enter</button>
    
        <p>Link 1</p>
    <a data-toggle="modal" data-id="ISBN564541" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a>

    <p>&nbsp;</p>


    <p>Link 2</p>
    <a data-toggle="modal" data-id="ISBN-001122" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a>

    <div class="modal hide" id="addBookDialog">
     <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>Modal header</h3>
      </div>
        <div class="modal-body">
            <p>some content</p>
            <input type="text" name="bookId" id="bookId" value=""/>
        </div>
    </div>
    
    
    
    
    
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- Toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    
     function toast(){

      // Display an info toast with no title
      toastr.success('Are you the 6 fingered man?');
         
     }   
    </script>
    
    <script>
    $(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show'); 
     });
    
    </script>
</body>