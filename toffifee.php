<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
   $wort=$_REQUEST[wort];
   $laenge = strlen($wort);
   
   echo "<html>\n";
   echo "<head>\n";
   echo "<link rel=\"stylesheet\" href=\"http://privat.tobis-bu.de/stylesheets/standard.css\" type=\"text/css\">\n";
   echo "<meta http-equiv=\"expires\" content=\"1000\">";
   echo "<title>Toffifee-Schrift für \"$wort\"</title>\n";
   echo "</head>\n";
   echo "<body>\n";
 
   //Falls irgendso ein N00B nix eingibt!!
   if($wort=="")
   {
     echo "Also, ein Skript lebt davon Eingaben entgegen zu nehmen!! :-)<br>DU N00B!!1!<br><br>";
     echo "\n<a href=\"index.php\">Zur&uuml;ck zur Eingabe</a>\n";
     exit;
   }
   
	//Wenn im Wort "0x" vorkommt, wird der String nicht mehr angezeigt...   
	if(preg_match('/0x/',$wort) or preg_match('/%/',$wort)) {
	 echo "<img src=\"trollface.jpg\"><br>\n";
	 echo "Are you Trolling me?<br>\n";
     echo "\n<a href=\"index.php\">Zur&uuml;ck zur Eingabe</a>\n";
	 exit;
	}
	   
   for($i=0; $i<=$laenge; $i++)
   {
      $x = "$wort[$i]";

      if ( $x >= "a" AND $x <= "z" )
      {
         echo "<img src=\"kl/$x.jpg\">&nbsp;\n";
      }
      else if ( $x >="A" AND $x <= "Z" )
      {
         echo "<img src=\"gr/$x.jpg\">&nbsp;\n";
      }
      else if ( $x >="0" AND $x <= "9" )
      {
         echo "<img src=\"zahlen/$x.jpg\">&nbsp;\n";
      }
      else if($x)
      {
         switch ($x)
         {
           case "?" : echo "<img src=\"fragezeichen.jpg\">&nbsp;\n";
                      break;
           case "!" : echo "<img src=\"!.jpg\">&nbsp;\n";
                      break;
           case "." : echo "<img src=\"punkt.jpg\">&nbsp;\n";
                      break;
           case "," : echo "<img src=\",.jpg\">&nbsp;\n";
                      break;
           case ";" : echo "<img src=\";.jpg\">&nbsp;\n";
                      break;
           case "@" : echo "<img src=\"@.jpg\">&nbsp;\n";
                      break;
           case ":" : echo "<img src=\"doppelpunkt.jpg\">&nbsp;\n";
                      break;
           case ")" : echo "<img src=\").jpg\">&nbsp;\n";
                      break;
           case "(" : echo "<img src=\"(.jpg\">&nbsp;\n";
                      break;
           case "/" : echo "<img src=\"geteilt.jpg\">&nbsp;\n";
                      break;
           case "=" : echo "<img src=\"gleich.jpg\">&nbsp;\n";
                      break;
           case "*" : echo "<img src=\"mal.jpg\">&nbsp;\n";
                      break;
           case "-" : echo "<img src=\"minus.jpg\">&nbsp;\n";
                      break;
           case "+" : echo "<img src=\"plus.jpg\">&nbsp;\n";
                      break;
           case "Ä" : echo "<img src=\"gr/Ae.jpg\">&nbsp;\n";
                      break;
           case "ä" : echo "<img src=\"kl/ae.jpg\">&nbsp;\n";
                      break;
           case "Ö" : echo "<img src=\"gr/Oe.jpg\">&nbsp;\n";
                      break;
           case "ö" : echo "<img src=\"kl/oe.jpg\">&nbsp;\n";
                      break;
           case "Ü" : echo "<img src=\"gr/Ue.jpg\">&nbsp;\n";
                      break;
           case "ü" : echo "<img src=\"kl/ue.jpg\">&nbsp;\n";
                      break;
           case "ß" : echo "<img src=\"scharfs.jpg\">&nbsp;\n";
                      break;
           case " " : if($erg == 0)     //Erweiterung für Rechnen
                      { echo "<br>\n"; }
                      else
                      { echo "&nbsp;\n"; }
                      break;
           //Wenn das Zeichen nicht vorhanden ist;
           case "$x" : echo "<font size=\"+4\">$x</font>&nbsp;\n";
                      break;
         } //switchende;
      } //elseif ende;

      else if ( $x < 1 AND $x > (-1) AND $x !== "") // Zahlen
      {
         echo "<img src=\"0.jpg\">&nbsp;\n";
      }

      if($i == $laenge)
      {
		if(preg_match('/trollen/',$wort)) {
			echo "<img src=\"trollface.jpg\"><br>\n";
	 	}
		echo "<br>";
        echo "\n<a href=\"index.php\">Zurück zur Eingabe</a>\n";
        echo "<br>";
        echo "<br>";
        echo "</body>\n";
        echo "</html>\n";
      } //Forschleifenende;
   } //Hauptskriptende;

/*
//Counter
    //Datei öffnen;
    $countfile = "counter.txt";
    $fd = fopen($countfile , "r");
    $zahl = fread ( $fd, filesize ( $countfile));
    fclose($fd);
    //Counterzahl wird erhöht;
    $zahl++;
    //Datei öffnen und die erhöhte Zahl reinschreiben;
    $fd = fopen($countfile , "w");
    flock($fd,2);
    fputs($fd, $zahl);
    flock($fd,3);
    fclose($fd);
*/

//Logdatei
      $zeit = getdate();
      $p= $zeit["weekday"];
      $ipadresse = getenv('REMOTE_ADDR');

      $filename = "./logs/$p.html";
      $fd = fopen($filename, "r+" );
      $current = fread($fd, filesize( $filename ) );
      fclose( $fd );

      //Festlegung, welche Sachen in die Datei geschrieben werden sollen;
      $urlvar = urlencode($wort);
      $fileMessage = "<b>Datum:</b>  ";
      $fileMessage .=(date("l d-m-Y H:i:s"));
   // $fileMessage .= " <form action='toffifee.php' method=post><input type=hidden name=wort value=$wort ><input type=submit value=$wort></form>";
      $fileMessage .= " <a href=\"./toffifee.php?wort=$urlvar\">$wort</a>";
      $fileMessage .= " <font color=\"#00FD00\"><b>IP-Adresse</b> $ipadresse</font><br>\n";
      $fileMessage .= "$current";

      //Daten werden ins File geschrieben;
      $page = $filename;
      $cartFile = fopen($page, "w+");
      fputs($cartFile,$fileMessage);
      fclose($cartFile);

   exit;
} //GET Methode fertig. :)
?>
