<html>
<head>
<title>Ausgabe der Logdatei</title>
   <link rel="stylesheet" href="http://privat.tobis-bu.de/stylesheets/standard.css" type="text/css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{

   $p=$_REQUEST[p];
   $nl = "<br>\n";

   switch ($p)
   {
     case "Monday" : $tagdeutsch = "Montag";
     		    break;
     case "Tuesday" : $tagdeutsch = "Dienstag";
     		    break;
     case "Wednesday" : $tagdeutsch = "Mittwoch";
     		    break;
     case "Thursday" : $tagdeutsch = "Donnerstag";
     		    break;
     case "Friday" : $tagdeutsch = "Freitag";
     		    break;
     case "Saturday" : $tagdeutsch = "Samstag";
     		    break;
     case "Sunday" : $tagdeutsch = "Sonntag";
     		    break;
   }

   if($p=="")
   {
     echo "Fehlerhafter Aufruf, du N00b!<br><br>";
     echo "\n<a href=\"logausgabe.php\">Zur&uuml;ck zum aktuellen Log!!</a>\n";
     exit;
   }

   echo "<h1>Alle Eingaben, die jemals am <font color=\"#FF3333\">\"$tagdeutsch\"</font> gemacht wurden</h1>\n";

   echo "Andere Tage ansehen??";
   echo "$nl $nl";
   echo "<a href=\"./logausgabe-tag.php?p=Monday\">Montag</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Tuesday\">Dienstag</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Wednesday\">Mittwoch</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Thursday\">Donnerstag</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Friday\">Freitag</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Saturday\">Samstag</a><br>";
   echo "<a href=\"./logausgabe-tag.php?p=Sunday\">Sonntag</a><br>";
   echo "$nl $nl";

   echo "<a href=\"./index.php\">Zur&uuml;ck zur Eingabe</a>";
   echo "$nl $nl";
   echo "<a href=\"./logausgabe.php\">Zur&uuml;ck zur heutigen Logausgabe!!</a>";
   echo "$nl $nl";

   include("./logs/$p.html");
}
?>
</body>
</html>
