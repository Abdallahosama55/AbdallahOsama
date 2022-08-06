<?php 
if($_POST){
    print_r($_POST);die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name[]" />
        <input type="text" name="email[]" />

        <input type="text" name="name[]" />
        <input type="text" name="email[]" />

        <input type="text" name="name[]" />
        <input type="text" name="email[]" />
        <button>s</button>
    </form>
</body>

</html>