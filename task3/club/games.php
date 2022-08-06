<?php 
session_start();
if(!($_SERVER['REQUEST_METHOD'] == "POST" && $_POST)){
    echo "ERROR";die;
}
$_SESSION['subscriber'] = $_POST['name'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Games</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="result.php" method="post">
            <div class="row">
                <div class="col-12 text-center text-danger mt-5">
                    <h1> Games </h1>
                </div>
                <?php for($i=1;$i<=$_POST['members'];$i++){ ?>
                    <div class="col-12 m-5">
                        <div class="form-group">
                            <label for="member_<?= $i ?>_name">Member <?= $i ?></label>
                            <input type="text" name="member<?= $i ?>[name]" id="member_<?= $i ?>_name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="members">Games</label>
                            <div class="col-auto my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="member<?= $i ?>[games][football]" class="custom-control-input" id="member_<?= $i ?>_football" value="300">
                                    <label class="custom-control-label" for="member_<?= $i ?>_football">Football</label>
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="member<?= $i ?>[games][swimming]" class="custom-control-input" id="member_<?= $i ?>_swimming" value="250">
                                    <label class="custom-control-label" for="member_<?= $i ?>_swimming">Swimming</label>
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="member<?= $i ?>[games][volleyball]" class="custom-control-input" id="member_<?= $i ?>_volleyball" value="150">
                                    <label class="custom-control-label" for="member_<?= $i ?>_volleyball">Volleyball</label>
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="member<?= $i ?>[games][others]" class="custom-control-input" id="member_<?= $i ?>_others" value="100">
                                    <label class="custom-control-label" for="member_<?= $i ?>_others">Others</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <?php } ?>
                <div class="col-12 my-3">
                    <button class="btn btn-outline-danger w-100">Subscribe</button>
                </div>
            </div>
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php 
[
    'member1'=>[
        'name'=>'galal',
        'games'=>[
            'football'=>300,
            'swimming'=>250,
            'volleyball'=>150,
            'others'=>100
        ]
    ],
    'member2'=>[
        'name'=>'ahmed',
        'games'=>[
            'swimming'=>250,
            'volleyball'=>150
        ]
    ],
    'member3'=>[
        'name'=>'eslam',
        'games'=>[
        ]
    ],
]
?>