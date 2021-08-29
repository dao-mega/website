<?php
    $colors = ["#0f5132", "#002D5A", "#842029", "#212529", "#673ab7", "#cf3200", "#008ea0", "#607d8b",
               "#292929", "#007cb5"];

    $t1 = "automated algorithms that drastically increase your crypto investment";
    $t2 = "people in poverty without internet will be able to buy/sale our tokens";
    $t3 = "Our Mega Seed and Mega Sprout tokens are under development";
    $t4 = "the need to invest without concern for a loss";
    $t5 = "Mega Smart Tree: a smart contract that defines rules of our tokens";
    $t6 = "daomega target profit: $1,000,000 by end of 2024";
    $t7 = "investors have improved control over market value";
    $t8 = "short term traders need to define worse case scenario";
    $t9 = "agreed upon changes to smart contract rules";
    $t10 = "Mega Seed Token will have a lifecycle of 1 calendar month";
    $t11 = "investors will bid on the price of the Mega Seed Token";
    $t12 = "the Mega Seed token grows into a Mega Sprout token";
    $t13 = "for as little as $1, you can purchase a Mega Sprout Ticket";
    $title = [$t1, $t2, $t3, $t4,$t5, $t6, $t7, $t8, $t9, $t10, $t11, $t12, $t13];

    $l1 = "logo-v2.png";
    $l2 = "logo-v2-blockchain1.png";
//    $l3 = "logo-v2-blockchain2.png";
    $l4 = "logo-v2-blockchain3.png";
    $l5 = "logo-v2-blockchain4.png";
    $logo = [$l1,$l1,$l1,$l1,$l1,$l1,$l1,$l1,$l1,$l1,$l2,$l4,$l5,$l1,$l1,$l1,$l1];

    $rand = random_int(0, 9);
    $rand2 = random_int(1, 9);
    $rand_ttl = random_int(0,12);
    $rand4 = random_int(3,8);
    $rand5 = random_int(0,16);



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
            padding:30px 40px;
        }

        .silver {
            background-color: rgba(0,0,0, 0.<?php echo $rand4; ?>);
            border-top: double medium white;
            border-bottom: double medium white;
        }

    </style>
</head>
<body>
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1><?php echo $title[$rand_ttl]; ?></h1>
        </div>

    </div>
    <div class="row mt-3 mb-3">


            <img class="center-block" src="images/<?php echo $logo[$rand5]; ?>" />


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
        <h5>Our algorithms are beating the market by 77.66% Updated: August 28, 2021 at 12:50pm EST</h5>
    </div>

</div>

</body>
</html>