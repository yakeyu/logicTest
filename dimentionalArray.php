<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>５次元配列</title>
</head>
<body>
  
  <?php

  // ５次元配列
  $Okinawa = array(
    'ちんすこう',
    '中身汁',
    'ミミガー',
  );

  $Millano = array(
    'パスタ',
    'ピザ',
  );
  ///////////////////

  // ４次元配列
  $Japan = array(
    $Okinawa,
  );

  $Italy = array(
    $Millano,
  );
  ////////////////////

  // ３次元配列
  $east = array(
    $Japan,
  );

  $south = array(
    $Italy,
  );
  ////////////////////

  // ２次元配列
  $Asia = array(
    $east,  
  );

  $Euro = array(
    $south,
  );
  ///////////////////

  // １次元配列
  $earth = array(
    $Asia,
    $Euro, 
  );
  /////////////////

  echo $earth[0][0][0][0][0];

  ?>
   
</body>
</html>