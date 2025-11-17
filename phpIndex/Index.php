<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kristopheri PHP tööde leht</title>
    <link rel="stylesheet" href="style/DropDownStyle.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js" integrity="sha256-AlTido85uXPlSyyaZNsjJXeCs07eSv3r43kyCVc8ChI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
        $(document).ready(function(){
            $("#flip1").click(function(){
                $("#panel1").slideToggle("slow");
            });
        });

        </script>
</head>
<body>




<?php
//päis
include("header.php");
?>

<div id="flip">Peida/Näida menüü</div>
<?php
//navigeerimismenüü
include("nav.php");
?>



<div class="flex-container">
    <div id="left">
        <h2 id="panelleft">PHP on skriptimiskeel,
             mida kasutatakse peamiselt serveripoolsetes
            lahendustes dünaamiliste
            veebilehtede loomisel.
            PHP toetab objektorienteeritud programmeerimist, andmebaasidega suhtlemist ning moodulite kaudu veel paljusid protokolle ja rakendusi
            .</h2>
        <p></p>
    </div>

    <div>
        <main>
            <section>
                <?php
                if(isset($_GET["content/leht"])){
                    include('content/'.$_GET["leht"]);
                }else{
                    include('content/kodu.php');
                }
                ?>
            </section>
        </main>

    </div>


</div>



<?php
//jalus
include("footer.php");
?>

</body>
</html>