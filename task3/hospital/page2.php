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
  


<form method="POST" action="page3.php">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" >question</th>
      <th scope="col">bad</th>
      <th scope="col">good</th>
      <th scope="col">very good</th>
      <th scope="col">excelant</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Are you statfied about the level of cleaneas</th>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  id="inlineRadio1" value="0"  name="r_One">
  <label class="form-check-label" for="inlineRadio1"></label>
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" id="inlineRadio1" value="3"  name="r_One">
  <label class="form-check-label" for="inlineRadio1"></label>
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  id="inlineRadio1" value="5"   name="r_One">
  <label class="form-check-label" for="inlineRadio1"></label>
</div></td>

<td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  id="inlineRadio1" value="10"  name="r_One">
  <label class="form-check-label" for="inlineRadio1"></label>
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you statfied the service price</th>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_two" id="inlineRadio1" value="0"  method="post">
 
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_two" id="inlineRadio1" value="3"  method="post">
 
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_two" id="inlineRadio1" value="5"  method="post" >

</div></td>
<td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_two" id="inlineRadio1" value="10"  method="post">

</div>
    </tr>
    <tr>
      <th scope="row">Are you statfied with nursing service</th>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_three" id="inlineRadio1" value="0"  method="post">

</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_three" id="inlineRadio1" value="3"  method="post">
 
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_three" id="inlineRadio1" value="5"  method="post">

</div></td>
<td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_three" id="inlineRadio1" value="10" method="post">

</div></td>
    </tr>
    <tr>
      <th scope="row">Are you statfied with level of doctor</th>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_four" id="inlineRadio1" value="0" method="post">

</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_four" id="inlineRadio1" value="3" method="post">
 
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_four" id="inlineRadio1" value="5" method="post">

</div></td>
<td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_four" id="inlineRadio1" value="10" method="post">

</div></td>
    </tr>
    <tr>
      <th scope="row">Are you statfied with hospital</th>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_five" id="inlineRadio1" value="0" method="post">

</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_five" id="inlineRadio1" value="3" method="post">
 
</div></td>
      <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_five" id="inlineRadio1" value="5" method="post">

</div></td>
<td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="r_five" id="inlineRadio1" value="10" method="post"> 

</div></td>
    </tr>
    
  </tbody>
 

</table>


<div  style="margin-left:50%;" action = "">
<br><br><br>
<button type="submit" class="btn btn-secondary btn-lg  " method ="post" value="submit" >Result </button>

<br><br><br>

</div>
</form>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>