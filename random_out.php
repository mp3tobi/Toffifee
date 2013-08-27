<?php

   $zeit = getdate();
   $p= $zeit["weekday"];

$file_excuses =   "./logs/$p.html";
$a_file = file ("$file_excuses");
$ausgabe = trim ( $a_file [ mt_rand ( 1, count ($a_file) ) ] );
print ( $ausgabe );
# 1. Count the records in the array.
# 2. Get a random number between 1 and the result from "1.".
# 3. Get the record with the index number from "2.".
# 4. Cut away the line break form "3.".
# 5. Print the sentence on the screen.

$teile = explode(" ", $ausgabe);

echo "<a href=\"mailto:&#116;&#111;&#098;&#105;&#097;&#115;&#046;&#097;&#105;&#099;&#104;&#101;&#108;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;?subject=Abusemeldung&amp;body=$teile[3] $teile[4] \">Abusemeldung</a>";

/*
echo "<form action=\"mailsend.php\" method=\"get\">";
echo "<input name=\"ausgabe\" type=\"text\" size=\"1\" value=\"$ausgabe\">";
echo "<input type=\"submit\" value=\"Los!\">";
echo "</form>";
*/

?>
