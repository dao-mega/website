<?php
    $colors = ["#0f5132", "#002D5A", "#842029", "#212529", "#673ab7", "#cf3200", "#008ea0", "#607d8b",
               "#292929", "#007cb5", "#ee7752", "#e73c7e", "#23a6d5", "#23d5ab"];
    $rand_col = random_int(0, 13);

    $t1 = "automated algorithms that drastically increase your crypto investment";
    $t2 = "token access to people in poverty without internet";
    $t3 = "Mega Seed and Mega Sprout tokens are under development";
    $t4 = "short term investments without concern for loss";
    $t5 = "smart contract updates based on semantic versioning";
    $t6 = "daomega target profit: $1,000,000 by end of 2024";
    $t7 = "improve investors control over market value";
    $t8 = "short term traders can define worse case scenario";
    $t9 = "community driven updates to smart contract rules";
    $t10 = "worlds first physical crypto currency";
    $t11 = "investors bids establish the value of the Mega Seed Token";
    $t12 = "equity based tokens";
    $t13 = "for as little as $1, you can purchase a token";
    $t14 = "Mega Smart Tree smart contract is under development";
    $title = [$t1, $t2, $t3, $t4, $t5, $t6, $t8, $t9, $t10, $t11, $t12, $t13, $t14];
    $rand_ttl = random_int(0,13);

    $l1 = "logo-v2-1.png";
    $l2 = "logo-v2-blockchain1.png";
    $l3 = "logo-v2-blockchain5.png";
    $l4 = "logo-v2-blockchain3.png";
    $l5 = "logo-v2-blockchain4.png";
//    $l6 = "gold-dragon.png";
    $l7 = "mega-smart-tree.png";
    /*$l8 = "logo-v2.png";*/
    $logo = [$l1,$l3,$l2,$l4,
             $l5,$l7];
    $rand_log = random_int(0,5);

    $rand2 = random_int(1, 9);
    $rand4 = random_int(3,8);

//    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = 'rgba(' . random_int(0,255) . ',' . random_int(0,255) . ',' . random_int(0,255) . ',' . '0.3' . ')';
    $bg = $color;


?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="we create mathematically validated crypto investment algorithms">
    <meta name="author" content="Michael A. Stratton">
    <!--<meta http-equiv="refresh" content="15; URL=https://daomega.com">-->

    <title>crypto startup company</title>

    <link rel="canonical" href="http://daomega.com">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- vanta.js birds -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>


    <link rel="stylesheet" href="style/cash.css">
    <style>
        .silver {
            background-color: <?php echo $bg; ?>;
            border-top: #fff thin solid;
            border-bottom: #fff thin solid;
        }

    </style>
   <?php include_once 'views/partials/google-analytics.php'; ?>
</head>
<body>

<div id="birds">


<div class="container pt-4 mb-4">
    <div class="row">
        <div id="title" class="col-12 text-center">
            <h2>We automate the process for investing in crypto currencies by carefully aligning your investment
                experience & strategy with mathematically validated, autonomous algorithms(bots).</h2>
        </div>

    </div>
    <div class="row mt-3 mb-3">


            <img class="center-block" src="images/logo-v2-1.png" />


    </div>
</div>
<div class="container-fluid pt-4 silver">

    <div class="row mt-2">
        <div class="col-md-3 text-center">
            <h4>Magic Penny</h4>
            <p><a href="compound-interest.php">a magic penny that doubles its value</a></p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Magic Pennies</h4>
            <p>5 magic pennies are better then 1</p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Ping Pong</h4>
            <p>two paddles and a ball</p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Rule of Thirds</h4>
            <p><a href="thirds.php">33% market loss? Not a problem.</a> </p>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3 text-center">
            <h4>Leftovers</h4>
            <p>a plate of frozen food.</p>
        </div>
        <div class="col-md-3 text-center">
            <h3>Banana Split</h3>
            <p>eat half now eat half later</p>
        </div>
        <div class="col-md-3 text-center">
            <h3>Million 24</h3>
            <p><a href="millionaire.php">one million dollars</a></p>
        </div>
        <div class="col-md-3 text-center">
            <h4>Patience My Friend</h4>
            <p><a href="patience.php">Your friend's arrival has been delayed</a></p>
        </div>
    </div>

 </div>

</div>
<script>
    VANTA.BIRDS({
        el: "#birds",
        mouseControls: false,
        touchControls: false,
        gyroControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color1: 0x329303,
        color2: 0xff1e,
        birdSize: 2.0,
        wingSpan: 32.00,
        speedLimit: 2.00,
        cohesion: 73.00,
        quantity: 1.00,
        backgroundAlpha: 0.5
    })
</script>
</body>
</html>