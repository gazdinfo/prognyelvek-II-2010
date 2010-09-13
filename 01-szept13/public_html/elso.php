

<?php
  // phpinfo();
  
  // egy sor kommentezese
  # szinten egy sor kommentezese
  /*
   blokk kommentezese
  */

  // print ("<meta name=\"content\" content=\"text/html\" charset=\"utf-8\">"); // idezojelek levedve, igy mar mukodik
  print ('<meta name="content" content="text/html" charset="utf-8">'); // igy kicsit szebb, aposztroffal idezojel helyett
  
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
?>