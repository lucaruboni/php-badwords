<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badworder</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>
<body>
   <div class="container">
    <div class="row justify-content-center">
        
        <h1 class="my-5 text-center">PHP BADWORD</h1>
    
        <form class="form-group" action="script.php" method="post">
          <label for="paragraphe">Paragraphe</label>
          <input class="form-control" name="paragraphe" id="" placeholder="Write Here!">
    
              <label for="badword">Badword</label>
              <input class="form-control" name="badword" id="" placeholder="">
    
              <button class="btn btn-primary my-5" type="submit">SUBMIT</button>
    
    
        </form>
    </div>
   </div>
</body>
</html>