<html>
<head>
<title>.::Das ultimative Toffifee-Skript::.</title>
<link rel="stylesheet" href="http://privat.tobis-bu.de/stylesheets/standard.css" type="text/css">
</head>
<body>
<h1>Herzlich Willkommen</h1>
... beim Toffifee-Skript!!
<br>
<form action="toffifee.php" method="get">
  <font color="#FF0000">Bitte Wort oder Satz eingeben:</font><br>
  <input style="background-color:#DEDFDE; font-size:12px; font-family:Verdana; color:#FF0000" name="wort" type="text" size="25">
  <input type="submit" value="Los!">
</form>
<br>
<b><font face="VERDANA,ARIAL,HELVETICA" size="+2" color="#FFFF00">Erlaubte Zeichen:</font></b>
<br>
<br>
- Alle Buchstaben (a-z; A-B)<br>
- Alle Ziffern (0-9)
- Folgende Sonderzeichen: &auml;, &Auml;, &ouml;, &Ouml;, &uuml;, &Uuml; &szlig;<br>
@ , ; . - + : = / ! ? ( )
<br>
<br>
<a href="feedback-stork.html">Feedback von Stork</a>
<br>
<a href="logausgabe.php">Zur heutigen Logausgabe!</a>
<br>
<a href="logausgabe-alles.php">Gesamtlog alles Wochentage!</a>
<br>
<a href="versionhistorie.html">Zur Versionshistorie!</a>
<br>
<br>
Zufällige Ausgabe aus dem heutigen Logfile:
<br>
<p style="border-color:white; border-width:2px; border-style:solid; padding:16px">
<?php
    include("./random_out.php");
?>
</p>
<br>
<br>
<font color="#C0C0C0">Code by: mp3tobi & friends<br>
Design und Pics by: mp3tobi
<br>
<br>
Geschrieben im Monat November 2005</font>
</body>
</body>
</html>
