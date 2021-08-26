<?php
    $colors = ["#0f5132", "#002D5A", "#842029", "#212529", "#673ab7", "#ff3d00", "#008ea0", "#607d8b",
               "#292929", "#007cb5"];
    $rand = random_int(0, 9);
    $rand2 = random_int(1, 9);
?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="daomega.com is a crypto & block chain start up.
                                    We offer freelance software development, consultations and training">
    <meta name="author" content="Michael A. Stratton">

    <title>Crypto & blockchain software development, consultations & training</title>

    <link rel="canonical" href="http://daomega.com">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        body{
            background-color: <?php echo $colors[$rand]; ?>;
            background-image: url("images/bg-0<?php echo $rand2; ?>.png");
            /*background-size: cover;*/
            color: #ffffff;
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width:35%;
            padding:20px;
        }

        .silver {
            background-color: black;
            color:silver;
            border-top: solid medium gold;
            border-bottom: solid medium gold;
        }
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Algorithms that drastically increase your crypto investment</h1>
        </div>

    </div>
    <div class="row mt-5">

        <div class="col-12"><img class="center-block" src="images/logo-v2-large.png" /></div>

    </div>
</div>
<div class="container-fluid p-3 silver">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Algorithms Under Development</h2>
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-3 text-center">
            <h4>Magic Penny</h4>
            <p>A magic penny that doubles its value.</p>
        </div>
        <div class="col-3 text-center">
            <h4>Magic Pennies</h4>
            <p>5 magic pennies might be better then 1.</p>
        </div>
        <div class="col-3 text-center">
            <h4>Ping Pong</h4>
            <p>Two paddles and a ball - who will win?</p>
        </div>
        <div class="col-3 text-center">
            <h4>Rule of Thirds</h4>
            <p>33% market loss? Not a problem.</p>
        </div>

    </div>
</div>

</body>
</html>