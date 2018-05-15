<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add produc</h2>
  <!-- Form -->
  <form action="/action_page.php">
   <!-- Description -->
    <div class="form-group">
      <label for="email">Description:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
     <!-- /Description -->
     
    <!--Price -->
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     <!-- /Price -->
     
      <!-- Image -->
    <div class="form-group">
     <label for="exampleFormControlFile1">Select an image:</label>
     <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <!-- /Image-->
   
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

</body>
</html>
