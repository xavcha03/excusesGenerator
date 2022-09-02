<?php
    
    $date = date("d - m - y");

    //Select an excuse
    
    include("excuses/excuse-1.php");

    //Selection d'une excuse
    $strOutput = $excuseSickList[rand(0,sizeof($excuseSickList)-1)];

    //Recherche et modification de childName
    $strOutput = str_replace("###CHILDNAME###", $_POST["childName"], $strOutput);
    $strOutput = str_replace("###TEACHERNAME###", $_POST["teacherNAme"], $strOutput);
    $strOutput = str_replace("###DATE###", $date, $strOutput);

    if ($_POST["gender"] == 'boy') {
        $strOutput = preg_replace('/\{(.*?)\/(.*?)\}/', '$1', $strOutput);
    } else {
        $strOutput = preg_replace('/\{(.*?)\/(.*?)\}/', '$2', $strOutput);
    }






?>

<section class="excuse">
    <h1>Generated excuse</h1>
    <p>
        <?php echo $strOutput;?>
    </p>
</section>