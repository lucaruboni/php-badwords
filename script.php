<?php






echo $_POST['paragraphe'];
echo $_POST['badword'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">
            <?php
          
              echo $_POST['paragraphe'];
              

            ?>
            _____
            <?php
              
              
              echo strlen($_POST['paragraphe']);

            ?>
        </h1>

        <h1 class="text-center mt-5">
            <?php
          
              echo str_replace($_POST['badword'], "***", $_POST['paragraphe']) ;
              

            ?>
            _____
            <?php
              
              
              echo strlen($_POST['paragraphe']);

            ?>
        </h1>

       
    </div>
</div>

    
</body>
</html>