<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FizzBuzz</title>
</head>
<body>

  <?php 

    for($i = 1; $i <= 100; $i++) {
      if($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
        echo "<br>";
      } else {
        echo $i;
        echo "<br>";
      }
    }


 ?>
  
</body>
</html>