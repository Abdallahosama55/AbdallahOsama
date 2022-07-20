<?php  
 session_start(); ?>
<?php  


$num=$_POST['r_One'] ??  '-1';
$num2=$_POST['r_two'] ?? '-1';

$num3=$_POST['r_three']  ?? '-1';

$num4=$_POST['r_four']  ?? '-1';

$num5=$_POST['r_five']  ?? '-1';

?>



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
  
<table class="table">
  <thead class="thead-dark" style="width:100%">
    <tr>
    
      <th scope="col"  >question</th>
      <th scope="col" >Answer</th>
      <th scope="col"  ></th>
      <th scope="col"  ></th><th scope="col"  ></th>

  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Are you statfied about the level of cleaneas</th>
      <td><div class="form-check form-check-inline">
        <?php
        if( $num==5){
            echo "very good" ;
        }
        else if($num==3)
        {
            echo "good"; 
        }
        else if($num==0)
        {
            echo "bad"; 
        }
        else if($num==10)
        {
            echo "excallant"; 
        }

?>
  
    </tr>
    <tr>
      <th scope="row">Are you statfied the service price</th>
      <td><div class="form-check form-check-inline">
      <?php
        if( $num2==5){
            echo "very good" ;
        }
        else if($num2==3)
        {
            echo "good"; 
        }
        else if($num2==0)
        {
            echo "bad"; 
        }
        else if($num2==10)
        {
            echo "excallant"; 
        }
 ?>
</div></td>
      <td><div class="form-check form-check-inline">
 
</div>
    </tr>
    <tr>
      <th scope="row">Are you statfied with nursing service</th>
      <td><div class="form-check form-check-inline">
      <?php
        if( $num3==5){
            echo "very good" ;
        }
        else if($num3==3)
        {
            echo "good"; 
        }
        else if($num3==0)
        {
            echo "bad"; 
        }
        else if($num3==10)
        {
            echo "excallant"; 
        }
?>


</div></td>
    </tr>
    <tr>
      <th scope="row">Are you statfied with level of doctor</th>
      <td><div class="form-check form-check-inline">
      <?php
        if( $num4==5){
            echo "very good" ;
        }
        else if($num4==3)
        {
            echo "good"; 
        }
        else if($num4==0)
        {
            echo "bad"; 
        }
        else if($num4==10)
        {
            echo "excallant"; 
        }
        ?>
</div></td>
    </tr>
    <tr>
      <th scope="row">Are you statfied with hospital</th>
     
      <td><div class="form-check form-check-inline">
      <?php
        if( $num5==5){
            echo "very good" ;
        }
        else if($num5==3)
        {
            echo "good"; 
        }
        else if($num5==0)
        {
            echo "bad"; 
        }
        else if($num5==10)
        {
            echo "excallant"; 
        }
        ?>
</div></td>
    </tr>
    
  </tbody>
 

</table>

<?php



$result = $num+$num2+$num3+$num4+$num5;

if ($result>25 ){
echo  '<div class="alert alert-info" role="alert">
 thank you
</div>';

}
else if($result<25 and $result>0){
    echo  '<div class="alert alert-info" role="alert">
 the customer service will contact with you in  
   </div>';
 
  echo $_SESSION["number"];

    
}

else {
    echo  '<div class="alert alert-info" role="alert">
please Return to prevous page to give us your rating
   </div>';
}



?>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>