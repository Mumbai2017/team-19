<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sa'Ni'Sa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >
  <h2>Welcome to Chaakri</h2>
  <div class="row">
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/1.png" alt="...">
          <div class="caption">
            <h3>Khakhra 1</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/2.jpg" alt="...">
          <div class="caption">
            <h3>Khakhra 2</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/3.jpg" alt="...">
          <div class="caption">
            <h3>Khakhra 3</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/4.jpg" alt="...">
          <div class="caption">
            <h3>Khakhra 4</h3>
          </div>
        </div>
      </div>
 
    </div>

  </div>
  <form class="form-horizontal" action="/orders_confirm.php">
      <div class="form-group">
      <label class="control-label col-sm-2">Choose Flavours : </label>
          <div class="col-sm-10">
              <div class="col-sm-6">
              <input type="TextBox" ID="p_id" Class="form-control" >
              
             <button class="btn btn-default dropdown-toggle" type="button" id="menubtn" data-toggle="dropdown">Choose Flavours
            <span class="caret"></span></button>
            <ul id="menu" class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" >khakhra 1</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" >khakhra 2</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1">khakhra 3</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" >khakhra 4</a></li>
            </ul>
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
        <a type="submit" class="btn btn-default">Submit</a>
      </div>
    </div>
  </form>
    
    <script>
        $('#menu li a').on('click', function(){
        $('#p_id').val($(this).html());
    });
    </script>

</body>
</html>
