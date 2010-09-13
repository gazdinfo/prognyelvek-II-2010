<?php
  // phpinfo();
  
  // egy sor kommentezese
  # szinten egy sor kommentezese
  /*
   blokk kommentezese
  */

  // print ("<meta name=\"content\" content=\"text/html\" charset=\"utf-8\">"); // idezojelek levedve, igy mar mukodik
  print ('<meta name="content" content="text/html" charset="utf-8">'); // igy kicsit szebb, aposztroffal idezojel helyett
?>

<table border="1">
  <?php
  $i = 1;
  while (true) {  // hehe vegtelen ciklus...
    print  "<tr><td>";
    print $i;
    print "</td><td>";
    print gettype($i);
    print "</td></tr>";
    
    if (is_int($i)) { // irdatlan csunya if kupac...
      $i = 1.1;
    } elseif (is_double($i)) {
      $i = 'I\'m a string!';
    } elseif (is_string($i)) {
      $i = true;
    } else {
      break; // ha mar minden megvan, akkor ne felejtsunk el kilepni az egyebkent vegtelen ciklusbol :)
    }
  }
  ?>
</table>

<?php
  
  $a = 5; // 'a' valtozo deklaralasa, egybol erteket is adunk neki
          // PHP gyengen tipusos -> nem kell megadni a valtozo tipusat, kitalaja magatol
          
  print $a; // 'a' valtozo kiiratasa
  
  // jozan paraszti esszel osszerakott kiiratas, ami nem mukodik...
  print "$a erteke =";
  print $a;
  print "<br />"; // sortores beillesztese
  
  // kicsit szebb megoldas
  print "\$a erteke = $a";
  print "<br />"; // sortores beillesztese
  
  // az altalaban hasznalt megoldas, string osszefuzessel
  print '$a = ' . $a . "<br />";
  
  echo "Hello Vilag!"; // print helyett echo
  print "<br />"; // sortores beillesztese
  
  // gettype fuggveny
  print gettype($a);
  print "<br />"; // sortores beillesztese
  
  $b = false;
  print gettype($b); // false erteket NEM irja ki!
  print "<br />"; // sortores beillesztese
  
  $c;
  print gettype($c); // ures valtozonal figyelmeztetest ir ki
  print "<br />"; // sortores beillesztese
  
?>