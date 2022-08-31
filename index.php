<?php 
    //Verifie si le formulaire a été envoyé
    if(isset($_POST["childName"])){
        $formIsSended = true;
    }else{
        $formIsSended = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <?php 
        //Inclusion du formulaire
        include("form.php");
    

        //Si le formulaire à été envoyé
        if($formIsSended){
            include("excuse.php");
        }
    ?>
    
</body>
</html>