<?php
   require ( 'JMBG.php ');

<<<<<<< HEAD
   $br = "0";

=======
   $br = "0"; // broj za proveru
   
>>>>>>> 4503d0e9a661bbd80b806f608f131e054b2ff112
   try
   {
      $ob = new JMBG($br);
      if ( $ob->isOK() )
      {
         echo "<br>";
         echo "Broj $br je ispravan.<br>";
         echo "<hr>";

         echo "Datum rodjenja: " . $ob->getPersonData()["bday"]  . "<br>";
         echo "Pol: "      . $ob->getPersonData()["gender"]  . "<br>";
         echo "Region 1: " . $ob->getPersonData()["region"]  . "<br>";
         echo "Region 2: " . $ob->getPersonData()["region2"] . "<br>";
      }
      else
         echo "Broj nije ispravan.";
   }
   catch (\Exception $e)
   {
      echo $e;
   }

 ?>
