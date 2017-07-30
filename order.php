
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sa'Ni'Sa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  <link rel="stylesheet" type="text/css" href="form.css">-->
</head>
<body>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<form class="form-horizontal" action="php/orders_confirmed.php" method="POST">
<div class="container" >
  <h2>Welcome to Chaakri</h2><br><br>
  <div class="row">
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/1.jpg" alt="...">
          <div class="caption">
            <h3>Methi Masala</h3>
        
                  <label class="checkbox-inline"><input type="checkbox" name="p_id" value="1">Choose this</label>
                  <br>
                  <input type="number" id="quantity1" name="quantity1">
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/2.jpg" alt="...">
          <div class="caption">
            <h3>Nachni</h3>
              <label class="checkbox-inline"><input type="checkbox" name="p_id1" value="2">choose this</label>
                  <br>
                  <input type="number" id="quantity2" name="quantity2">
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/3.jpg" alt="...">
          <div class="caption">
            <h3>Panjabi Masala</h3>
              <label class="checkbox-inline"><input type="checkbox" name="p_id2" value="3">choose this</label>
                  <br>
                  <input type="number" id="quantity3" name="quantity3">
              
          </div>
        </div>
      </div>
      <div class="col-xs-10 col-md-3">
        <div class="thumbnail">
          <img src="images/4.jpg" alt="...">
          <div class="caption">
            <h3>Khichdi</h3>
              
              <label class="checkbox-inline"><input type="checkbox" name="p_id3" value="4">choose this</label>
                  <br>
                  <input type="number" id="quantity4" name="quantity4">
          </div>
        </div>
      </div>
      
 
    </div>

  </div>
    <center>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    </center>
    </form>
    <script>
        $('#menu li a').on('click', function(){
        $('#p_id').val($(this).html());
    });
    </script>

</body>
</html>
