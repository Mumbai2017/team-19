<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sa'Ni'Sa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<div class="container" >
  <h2>Customer Registration</h2>
  <form class="form-horizontal" action="php/customer_details.php">
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">contact:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="phone_no" placeholder="Enter Phone" name="phone_no" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name : </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="c_name" placeholder="Enter name" name="c_name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="c_address" placeholder="Enter address" name="c_address" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Landmark:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="landmark" placeholder="Enter Landmark" name="landmark" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="php/customer_details.php" type="submit" class="btn btn-default">Submit</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>
