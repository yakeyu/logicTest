<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FizzBuzz</title>
</head>
<body>

  <?php 

    // $iが100に達するまでループ
    for($i = 1; $i <= 100; $i++) {
      // もし$iが３の倍数かつ５の倍数の時
      if($i % 3 == 0 && $i % 5 == 0) {
        // "FizzBuzz"を出力
        echo "FizzBuzz";
        echo "<br>";
        // もし$iが３の倍数の時
      } elseif($i % 3 == 0) {
        // "Fizz"を出力
        echo "Fizz";
        echo "<br>";
        // もし$iが5の倍数の時
      } elseif($i % 5 == 0) {
        // "Buzz"を出力
        echo "Buzz";
        echo "<br>";
      } else {
        // ３の倍数でも５の倍数でもない時、$iを出力
        echo $i;
        echo "<br>";
      }
    }


 ?>
  
</body>
</html>