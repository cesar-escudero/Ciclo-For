<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  
  </head>
  <body>

    <h2>numero uno: <?php echo 1 ?></h2>
    <h2>numero uno: <?php echo 50 ?></h2>


    <?php

    $a=1;
    $b=50;


    for ($a=0; $a <= $b ; $a++) {
      if (($a%2)==1) {

         echo "&nbsp",$a++;
      }

         }


     ?>

  </body>
</html>
