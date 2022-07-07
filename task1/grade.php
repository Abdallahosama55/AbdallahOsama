
<!doctype html>
<html lang="en">
  <head>
    <title>number is odd or even</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>
  
      <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger h1 mt-5">
                Enter  the subject
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="">Physics </label>
                      <input type="number" name="p" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">Mathitics </label>
                      <input type="number" name="m" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">chemsitry </label>
                      <input type="number" name="c" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">computer </label>
                      <input type="number" name="co" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">Biology </label>
                      <input type="number" name="b" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    
                    <div class="form-group">
                      
                    </div>
                    <div class="form-group">
                     

                    <div class="form-group block"  >
                    <br>
                    <br>
            
                    <br>
                    <br>
                        <button class="btn btn-outline-danger btn-sm  ">Check</button>
                        <br>
                    </div>
                </form>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>

<?php
error_reporting(E_ERROR | E_PARSE);
$sum=$_POST['b']+$_POST['co']+$_POST['c']+$_POST['m']+$_POST['p'];
if($sum!=0)
{
$p=($sum/500);
$percentage=$p*100;
if($percentage=90 or $percentage>90){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade A"."</span>"; 
}
if($percentage=80||$percentage>80and$percentage<90){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade B"."</span>"; 
}
if($percentage=70||$percentage>70and$percentage<80){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade c"."</span>"; 
}
if($percentage=60||$percentage>60and$percentage<70){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade c"."</span>"; 
}
if($percentage=50||$percentage>50and$percentage<60){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade d"."</span>"; 
}
if($percentage=40||$percentage>40and$percentage<50){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade e"."</span>"; 

}
if($percentage<40){
    echo '<div style="color:red;display:inline;font-size:30px ;margin-left:37%">the precentage </div>' . "<span style='color:blue;display:inline;font-size:30px ;margin-left:40%'>"."grade f"."</span>"; 
}

}
?>