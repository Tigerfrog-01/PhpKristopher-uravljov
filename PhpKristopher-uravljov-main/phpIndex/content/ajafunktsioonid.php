<?php
echo "<div class='flex-container'>";

echo "<div id='aside'><strong>PHP - </strong>";

echo "<h1>Ajafunktsioonid</h1>";
echo "Tänane kuupäev".date("d.m.Y");
//timezone - juhul kui timezone ei ole määratud
//sis kuo php kasutab aega mis on localhostist
date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>timezones</a>";
echo "<br>";
echo "time()- aeg sekundites".time();
echo "<br>";
echo "date() -".date("",time());
echo "<pre>
date(''time());
d - ? 0.1...31
m - 1...12
Y - neljakohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
echo "</div>";

echo "<div id='aside'><strong>PHP - </strong>";

echo "<h1>Tehted kuupäevaga</h1>";
echo "<br>";
echo "+1min = time()+60= ". date('d.m.Y G:i:s', time ()+60);
echo "<br>";
echo "+1tund = time()+60*60= ". date('d.m.Y G:i:s', time ()+60*60);
echo "<br>";
echo "+1päev = time()+60*60*24= ". date('d.m.Y G:i:s', time ()+60*60*24);
echo "<br>";
echo "</div>";

echo "<div id='aside'><strong>PHP - </strong>";

echo "<h1>Kuupäeva genereerimine</h1>";
echo "mkime(tunnid,minutid,sekundid,kuu,päev,aasta)";
echo "<br>";
$synnipaev=mktime(5,5,5,4,6,2007);
echo"Minu sünnipäev ".date("d,m,Y G:i:s",$synnipaev);

echo "Massiivi (array) abil kuvada tänane kuu nimi";
$kuud=array(1=>'Jaanuar','Veebuar','Märts','Aprill','Mai','Juuni','Juuli','August','September','Oktober','November','December');
$paev=date('d');
$aasta=date('Y');
$kuu=$kuud[date('m')];
echo "<br>";
echo "Tänane kuupäev kuunimega".$paev.".".$kuu." ".$aasta."a";
echo "<br>";
echo "Tänane kuupäev kuunimega".$paev.".".$kuu." ".$aasta."a";
echo "</div>";

echo "</div>";