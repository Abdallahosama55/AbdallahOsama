<?php
session_start();
if (!($_SERVER['REQUEST_METHOD'] == "POST")) {
    echo "ERROR";
    die;
} 
?>
<!doctype html>
<html lang="en">

<head>
    <title>Your Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5">
                <h1> Invoice </h1>
            </div>
            <div class="col-8 offset-2 mt-5">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Subscriber</th>
                            <th colspan="10"><?= $_SESSION['subscriber'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalGames = 0;
                        $footballClub = 0;
                        $volleyballClub = 0;
                        $swimmingClub = 0;
                        $othersClub = 0;
                        foreach ($_POST as $key => $member) { ?>
                            <tr>
                                <td><?= $member['name'] ?></td>
                                <?php
                                if (isset($member['games'])) {
                                    $totalGames += array_sum($member['games']);
                                    foreach ($member['games'] as $game => $price) {
                                        echo "<td>{$game}</td>";
                                        if($game == 'football'){
                                            $footballClub += $price;
                                        }elseif($game == 'volleyball'){
                                            $volleyballClub += $price;
                                        }elseif($game == 'swimming'){
                                            $swimmingClub += $price;
                                        }else{
                                            $othersClub += $price;
                                        }
                                    }
                                    echo "<td colspan=4 class='text-right'>" . array_sum($member['games']) . " EGP</td>";
                                } else {
                                    echo "<td colspan=5 class='text-right'> 0 EGP</td>";
                                }
                                ?>
                            </tr>

                        <?php } ?>
                        <tr>
                            <td>Total Games</td>
                            <td colspan="6" class="text-right"><?= $totalGames ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Football Club</td>
                            <td colspan="6" class="text-right"><?= $footballClub ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Volleyball Club</td>
                            <td colspan="6" class="text-right"><?= $volleyballClub ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Swimming Club</td>
                            <td colspan="6" class="text-right"><?= $swimmingClub ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Others Club</td>
                            <td colspan="6" class="text-right"><?= $othersClub ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Club Subscription</td>
                            <td colspan="6" class="text-right"><?= $culbsubsription = 10000 + (2500*count($_POST)) ?> EGP</td>
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td colspan="6" class="text-right"><?= $culbsubsription + $totalGames ?> EGP</td>
                        </tr>
                    </tbody>
                </table>
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