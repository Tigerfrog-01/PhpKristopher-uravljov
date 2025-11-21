<?php
echo "<h2>Tekstfunktsioonid</h2>";
$tekst='Veebirakendus on arvutitarkvara programm';
echo $tekst; // näitab muutaja sisu
echo "<br>";
echo "Mitu sõna on lauses -str.word_count()=".str_word_count($tekst)."tk";
//metshein.com --> PHP alused
echo "<br>";
echo "Kõik tähed muudab väiksemaks -strtolower".strtolower($tekst);
echo "<br>";
echo "Kõik tähed muudab suuremaks -strtoupper()".strtoupper($tekst);
echo "<br>";
echo "muudab teksti kõige esimese märgi suureks".ucfirst(strtolower($tekst));
echo "<br>";
echo "muudab iga sõna esimese tähe suureks".ucwords(strtolower($tekst));
echo "<br>";
echo "loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid".strlen($tekst);
echo "<br>";
echo "loeb kokku sõnade arvu".str_word_count($tekst);
echo "<br>";
echo "<pre>$tekst</pre>";
echo "eemaldab tühiku tekstist -trim()= <pre>".trim($tekst)."</pre>";
echo "eemaldab tühikud teksti eest .ltrim()= <pre>".ltrim($tekst)."</pre>";
echo "eemaldab tühikud teksti taga - rtrim()= <pre>".rtrim($tekst)."</pre>";
echo "<h1> Tekst kui masiiv</h1>";
echo "võtab tekstist esimese sõna -tekst(0)".$tekst[0];
echo "<br>";
echo "võtab tekstist viies täht".$tekst[4];
echo "<br>";
echo "võtab tekstist 4 tähest 5 tähte".substr($tekst,3,5);
echo "<br>";
echo "võtab alates 5 tähest kuni 13 täheni".substr($tekst,4,-13);
echo "<br>";
echo "võtab  paremalt poolt alates 8,7 tk".substr($tekst,-8,7);
echo "<br>";
print_r(str_word_count($tekst,1));//Array ( [0] => Veebirakendus [1] => on [2] => arvutitarkvara [3] => programm )
echo "<br>";
$sona = str_word_count($tekst,1);
echo "võtab kolmas sõna tekstimasiivist ".$sona[2];
echo "<br>";
echo "<h3>Teksti asendamine</h3>";
$asendus = 'Tarkvara';
$otsitav_algus = 17;
$otsitav_pikkus = 14;
echo "asendab sõna tarkvara algusega 17 kuni 14".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo "<br>";
$otsi = array('on', 'programm');
$asenda = array('----', 'software');
echo "otsib on ja asendab ".str_replace($otsi, $asenda, $tekst);
echo "<h2> MÕISTATUS - ARVA ÄRA INGLISMAA LINNANIMI</h2>";
echo "<br>";
$linn="";

echo "<ol><li>Linn algab $linn[0] tähega</li> ";
echo "<li>Tähtede arv kokku: </li>".strlen($linn);
echo "<li>sõna lõik alates 11 tähest kuni 21 tähest: </li>".substr($linn,10,20);

echo "<br>"
?>


<form action="tekstunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi</label>
   <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
    </form>


<?php
if(isset($_REQUEST["linn"])) {
    if ($_REQUEST["linn"] != "Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch") {
    }
    echo $_REQUEST["linn"] . " on õige";
}else{
    echo $_REQUEST["linn"]."on vale";

}
?>












