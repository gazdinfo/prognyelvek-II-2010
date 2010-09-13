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
  
  // var_dump fuggveny
  $d = 42;
  var_dump($d); // ez kiirja a typust, de nem alkalmas vizsgalatokra, mert stringet ad vissza
  print "<br />"; // sortores beillesztese
  
  // is_* fuggvenyek
  print is_int($d); // ezzel meg lehet viysgalni, hogy egy valtozo integer-e, ugyan ez: is_bool, is_string, stbstb.
  print "<br />"; // sortores beillesztese
  
  // if szerkezet
  if (is_int($d)) {
    // igaz ag
    print "Integer";
  } else {
    // hamis ag
    print "Nem integer";
  }
  
  print "<br />"; // sortores beillesztese
  
?>