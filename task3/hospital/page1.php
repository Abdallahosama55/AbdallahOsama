<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>tABEL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="page2.php" method="POST"  style="margin:15%;margin-left:25%">

<h1>Mobile number</h1>
<div class="card" style="width: 45rem;">
  <div class="card-body">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mobile number</label>
    <div class="form-outline">
  <input type="text"  class="form-control"  name="number_mob" action="task2.php"/>
</div>
    <div id="emailHelp" class="form-text">We'll never share your mobile number with anyone else.</div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit" value="submit" action="page 2.php">Submit</button>

  </div></div>

</form>
<?php ;

$_SESSION["number"]=$_POST['number_mob'] ?? '';
echo "Session variables are set.";

?>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
