<?php 
    //Verifie si le formulaire a été envoyé
    if(!empty($_POST)){
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
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <div class="container">
        <h1>Fake Excuses Generator</h1>
    <?php 
        //Inclusion du formulaire
        include("form.php");
    

        //Si le formulaire à été envoyé
        if($formIsSended){
            include("excuse.php");
        }
    ?>
    </div>
    


    <?php echo $name ?>
    <?=$name?>
    
</body>
</html>