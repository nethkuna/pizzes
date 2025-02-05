<html>
     <head>
          <meta content="text/html; charset=UTF-8" http-equiv="content-type">
          <title>FES LA TEVA PIZZA</title>
     </head>
     <body>
     <?php
          $preu = 8;           $IVA=21;
          if (empty($_GET['ingr'])) {
               $pvp=((100+$IVA)/100)*$preu;     echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
   	    exit(0);
          }           else {
               $IVA=21;
    $pvp=((100+$IVA)/100)*($preu+count($_GET['ingr']));      echo "Has demanat la pizza bàsica amb:<br> ";      foreach ($_GET['ingr'] as $ingredient) {           if ($ingredient) {         echo "* $ingredient<br>";
   }
      }
      echo "El preu és $pvp € (IVA inclòs)<br>";       exit(0);
}
echo "<br>";
echo "Autor: janeth"."<br>";
     ?>
     </body>
</html>

