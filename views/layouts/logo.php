<?php
    $colors = ["#0f5132", "#002D5A", "#842029", "#212529", "#673ab7", "#cf3200", "#008ea0", "#607d8b",
               "#292929", "#007cb5"];

    $t1 = "automated algorithms that drastically increase your crypto investment";
    $t2 = "'Nothing leads so straight to futility as literary ambitions without systematic knowledge.' ~ H.G. Wells";
    $t3 = "computer science based software development";
    $t4 = "an evolution from computer science and mathematics into the world of crypto";
    $t5 = "freelance software/web development, consultations and training";
    $t6 = "daomega target profit: $1,000,000 by end of 2024";
    $title = [$t1, $t2, $t3, $t4,$t5, $t6];

    $rand = random_int(0, 9);
    $rand2 = random_int(1, 9);
    $rand3 = random_int(0,5);
    $rand4 = random_int(3,8);

?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="daomega.com is a crypto & block chain start up.
                                    We offer freelance software development, consultations and training">
    <meta name="author" content="Michael A. Stratton">
    <meta http-equiv="refresh" content="5; URL=https://daomega.com">

    <title>Crypto & blockchain software development, consultations & training</title>

    <link rel="canonical" href="http://daomega.com">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        body{
            background-color: <?php echo $colors[$rand]; ?>;
            background-image: url("images/bg-0<?php echo $rand2; ?>.png");
            background-size: cover;
            color: #ffffff;
        }
        h1 {
            font-weight: 300;
            font-size: 2.2rem;
        }
        h2 {
            font-size:1.8rem;
        }
        h3 {
            font-size: 1.4rem;
        }

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width:500px;
            padding:20px 40px;
        }

        .silver {
            background-color: rgba(0,0,0, 0.<?php echo $rand4; ?>);
            border-top: solid medium gold;
            border-bottom: solid medium gold;
        }
        .gold {
            color:gold;
            font-weight: 300;
        }
    </style>
</head>
<body>
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1><?php echo $title[$rand3]; ?></h1>
        </div>

    </div>
    <div class="row mt-5">


            <img class="center-block" src="images/logo-v2.png" />


    </div>
</div>
<div class="container-fluid p-3 silver">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Algorithms Under Development</h2>
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-md-3 text-center">
            <h4>Magic Penny</h4>
            <p>A magic penny that doubles its value.</p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Magic Pennies</h4>
            <p>5 magic pennies might be better then 1.</p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Ping Pong</h4>
            <p>Two paddles and a ball - who will win?</p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Rule of Thirds</h4>
            <p>33% market loss? Not a problem.</p>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col-md-4 text-center">

            <h4>Leftovers</h4>
            <p>A plate of frozen food.</p>
        </div>
        <div class="col-md-4 text-center">

        </div>
        <div class="col-md-4 text-center">
            <h3>Banana Split</h3>
            <p>Eat half now eat half later.</p>
        </div>

    </div>
    <div class="row text-center">
        <h3 class="gold">Our algorithms are beating the market by 51.72% Updated: August 26, 2021 at 10:30am EST</h3>
    </div>

</div>

</body>
</html>