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
  <h2>Welcome to Chaakri</h2><br><br>
  <div class="row">
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/1.png" alt="...">
          <div class="caption">
            <h3>Methi Masala</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/2.jpg" alt="...">
          <div class="caption">
            <h3>Nachni</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/3.jpg" alt="...">
          <div class="caption">
            <h3>Panjabi Masala</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/4.jpg" alt="...">
          <div class="caption">
            <h3>Khichdi</h3>
          </div>
        </div>
      </div>
 
    </div>

  </div><center>
  <form class="form-horizontal" action="php/orders_confirmed.php" method="POST">
      <div class="form-group">
      <label class="control-label col-sm-2">Choose Flavours : </label>
          <div class="col-sm-10">
              <div class="col-sm-6">
              <label class="checkbox-inline"><input type="checkbox" name="p_id" value="1">Breakfast</label>
              <label class="checkbox-inline"><input type="checkbox" name="p_id" value="2">Methi Masala</label>
              <label class="checkbox-inline"><input type="checkbox" name="p_id" value="3">Nachni</label>
              <label class="checkbox-inline"><input type="checkbox" name="p_id" value="2">Panjabi Masala</label>
              <label class="checkbox-inline"><input type="checkbox" name="p_id" value="3">Khichdi</label>
              </div>
          </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Quantity : </label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
    </center>
    <script>
        $('#menu li a').on('click', function(){
        $('#p_id').val($(this).html());
    });
    </script>

</body>
</html>
