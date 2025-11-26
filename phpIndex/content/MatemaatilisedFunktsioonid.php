<?php
function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=" . $_REQUEST[$varname];
    }
    return strtok($url, "?") . "?$varname=" . $_REQUEST[$varname];
}
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1=10;
$arv2=15;
$liitmine=$arv1+$arv2;
$lahut=$arv1-$arv2;
$korrutis=$arv1*$arv2;
$jagamine=$arv1/$arv2;
$protsent = 50;
$protsent1 = 20;
$protsent2 = 70;
$ruutjuur= 3.14;



echo "arv 1 on ".$arv1." ja arv 2 on ".$arv2."<br>";
echo "Vastused ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h2>Omistamimise operaatorid:</h2> ";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo  $arv1++ ." suurendamine ühe võrra";
echo "<br>";
// $arv1-- - vähendamine ühe võrra $arv1=$arv1-1
$arv1--;
echo $arv1." - vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur -sqrt()</strong>".sqrt($arv1);
echo "<br>";
echo "Suvaline number: ".rand();
echo "<br>";
echo "Suvaline number alates 1-10: ".rand(1,10);
echo "<br>";
echo "<strong>Ühe protsendi leidmine arvust arv1 </strong>";
echo "<br>";
echo  "$protsent protsenti  arvust $arv1: ".($arv1 * $protsent)/100;
echo "<br>";
echo "<strong>Ringi raadiuse leidmine arvestades ,et arv1 $arv1 on diameeter</strong>";
echo "<br>";
echo $ruutjuur * $arv1;
echo "<h2>Arvmõistatus. Arva ära kaks arvu</h2>";
$salaarv1=4;
$salaarv2=3;
//kirjuta matemaatilised tehega või funktsioonidega abil
echo "<ol><li>Kui esimene arv korrutada 5, siis tuleb ".($salaarv1*5)." </li>";
echo "<br>";
echo "<li>Üks nendest suvalistest arvudest on õige vastus nii arv ühele ja arv kahele ".(rand(1,10))." </li>";
echo "<br>";
echo "<li>Kui ma korrutan arv 2 5-ga ja siis jagan selle 10-ga ja siis lisan 50 ning peale selle lahutan 200 saan selle vastuse, nüüd leia arv 2, edu!".($salaarv2*5/10+50-200)." </li>";
echo "<br>";
echo "<li>Esimene arv on 20% arvust arv 1 ja teine arv on 70%  ".(($salaarv1 * $protsent1)/100)." Ja ".(($salaarv2 * $protsent2)/100)." </li>";
echo "<br>";
echo "<li> Kui ma jagan Arv1 ja Arv2 siis saan selle tulemuse:".(($salaarv1 / $salaarv2))."   </li>";

echo "<br>";
?>


    <form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
        <label for="arv1">Sisesta arv1</label>
        <input type="text" id="arv1" name="arv1">


        <label for="arv2">Sisesta arv2</label>
        <input type="text" id="arv2" name="arv2">
        <input type="submit" value="Kontrolli">

    </form>


<?php
echo "<br>";
if(isset($_REQUEST['arv1'])&&($_REQUEST['arv1']!="")){

    echo "arv1;";
    if($_REQUEST['arv1']==$salaarv1){
        echo "<div id='correct'>";
        echo $_REQUEST['arv1']. " on õige";
        echo "</div>";
    } else
    {
        echo "<div id='incorrect'>";
        echo $_REQUEST['arv1']." on vale.";
        echo "</div>";
    }

}

echo "<br>";
if (isset($_REQUEST['arv2']) && ($_REQUEST['arv2'] != "")) {

    echo "arv2;";
    if ($_REQUEST['arv2'] == $salaarv2) {
        echo "<div id='correct'>";
        echo $_REQUEST['arv2'] . " on õige";
        echo "</div>";
    } else {
        echo "<div id='incorrect'>";
        echo $_REQUEST['arv2'] . " on vale.";
        echo "</div>";
    }

}