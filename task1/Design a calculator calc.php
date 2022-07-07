<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Simple Calculator </title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>


<div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger h1 mt-5">
                Enter  number
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                <b>First Number</b>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" class="form-control" placeholder="" aria-describedby="helpId" /> 
    
                <b>Second Number</b>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" class="form-control" placeholder="" aria-describedby="helpId" /> 
            
                <b>Result</b>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>" class="form-control" placeholder="" aria-describedby="helpId"> 
            
            <input type="submit" name="operator" class="btn btn-outline-danger btn-md " style="margin:10px;" value="Add" />
            <input type="submit" name="operator" value="Subtract" class="btn btn-outline-danger btn-md " style="margin:10px;" style="margin:10px;"/>
            <input type="submit" name="operator" value="Multiply" class="btn btn-outline-danger btn-md "style="margin:10px;" />
            <input type="submit" name="operator" value="Divide"  class="btn btn-outline-danger btn-md "style="margin:10px;"/>
	  </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>