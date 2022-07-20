
<!doctype html>
<html lang="en">
  <head>
    <title>BANK</title>
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
               Bank
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="">user Name</label>
                      <input type="text" name="user_Name" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">loan amount </label>
                      <input type="number" name="loan_amount" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
                    </div>
                    <div class="form-group">
                      <label for="">Number of years </label>
                      <input type="number" name="Number_years" id="" class="form-control" placeholder="" aria-describedby="helpId"  >
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



    $years= $_POST['Number_years'] ??'-1' ;
    $loan= $_POST['loan_amount'] ??'-1';
    $user= $_POST['user_Name'] ??'-1';
   

if($years<3and $years>0||$years==3 and $years>0){
 $Result_per_year=$loan+($loan*0.1*$years);
 $Result_per_month=$Result_per_year/(12*$years);
 echo 'name :'.$user. '<br>';
 echo 'interest rate : '.($loan*0.1*$years). '<br>';
 echo 'loan after rate : '.$Result_per_year. '<br>';
 echo 'per month : '.$Result_per_month. '<br>';
}
else if($years>3){
    $r=floatval($loan*0.1*$years);
    echo 'name :'.$user. '<br>';
    echo 'interest rate :'.$r. '<br>';
    $Result_per_year=$loan+($loan*0.15*$years). '<br>';
    $Result_per_month=($Result_per_year/12*$years). '<br>';


    echo 'loan after rate :'.$Result_per_year. '<br>';
    echo 'per month :'.$Result_per_month. '<br>';
   }
 else if($years=='-1') {
    echo 'waiting for enter value ';
 }


   

?>