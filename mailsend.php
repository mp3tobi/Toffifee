<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
   $ausg=$_REQUEST[ausgabe];
   $ipad = getenv('REMOTE_ADDR');

/* Empfänger */
$empfaenger = 'tobias.aichele@gmail.com';

/* Absender */
$absender = "webmaster@tobis-bu.de";

/* Rueckantwort */
$reply = 'webmaster@tobis-bu.de';

/* Betreff */
$subject = 'Abusemeldung';

/* Baut Header der Mail zusammen */
$headers .= 'From:' . $absender . "\n";
$headers .= 'Reply-To:' . $reply . "\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
$headers .= 'X-Sender-IP: ' . $REMOTE_ADDR . "\n";
$headers .= "Content-type: text/html\n";

/* Verschicken der Mail */
mail($empfaenger, $subject, $ausg, $headers);

exit;
}

?>