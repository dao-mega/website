<?php


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

    <link rel="stylesheet" href="style/cash.css">
    <?php include_once 'views/partials/google-analytics.php'; ?>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div id="title" class="col-12 text-center">
            <h1>Magic Penny</h1>
            <h5>The Magic Penny algorithm is based on compound interest</h5>

        </div>

    </div>
    <div class="row mt-3 mb-4">
        <div class="col-md-4"></div>
        <div class="col-md-6">
            <code><strong>/* pseudo for basic mathematical validation */</strong> <br>
              double $n; $x; $y; // user defined<br>
              double $start; // start price <br>
              double $current; // current price <br>
              double $sale = $start * $x;<br>
              double $buy = $start * $y;<br>
              bool $isBuying; // boolean to invoke sale or buy <br>
              if($sale<=$current && $isBuying==0){function sale();}<br>
              if($buy>=$current && $isBuying==1){function buy();}
            </code>
        </div>

    </div>
    <div class="row mt-1">
        <div class="col-md-1"></div>
        <div class="col-md-10">

            <p class="text-center">This algorithm works best when a crypto asset is increasing in value, over time(bull market).</p>
            <p class="text-center">You set the n, x and y values as to the amount you would like to invest(n),
                when to sale in the form of a percentage increase(x) and when to buy in the form of a percentage decrease(y).
                If the value increases by your x-value, it will trigger a sale of your
                asset, and then re-invest your entire amount(including profits) once it decreases by your y-value.</p>

        </div>
        <div class="col-md-1"></div>
    </div>
   <?php include_once 'views/partials/backlink.php'; ?>
</div>



</body>
</html>