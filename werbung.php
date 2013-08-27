<?
    include ("connect.php");

   mt_srand((double)microtime()*1000000);
   $zufall=mt_rand(1,3);


    $sql = "SELECT * FROM lose_ads WHERE ID = '$zufall' LIMIT 0, 30 ";
    $resultat = mysql_query($sql);
    $_daten = mysql_fetch_array($resultat, MYSQL_ASSOC);

    echo $_daten["CODE"];
?>