                   <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>

  </head>
  <body>

    <h2>numero uno: <?php echo 1 ?></h2>
    <h2>numero uno: <?php echo 5 ?></h2>


    <?php

    $a=1;
    $b=5;
   $suma=0;

    for ($a=1; $a <= $b ; $a++) {

         echo "&nbsp$a";

         $suma=$suma+$a;
echo "<br>";
      }
  echo "<h4>La Suma Es:&nbsp$suma</h4>"

     ?>

  </body>
</html>
