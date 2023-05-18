<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    
    <div class="d-flex justify-content-center py-5 bg-primary">
        <form class="my-5 d-flex justify-content-center flex-wrap" action="badwords.php" method="post">
            <div>
                <textarea name="paragraph" id="paragraph" cols="50" rows="20" placeholder="INSERISCI UN TESTO A TUO PIACIMENTO"></textarea>
            </div>
            <div class="w-100 my-3">
                <input class="w-100" type="text" name="badword" id="badword" placeholder="SCEGLI UNA PAROLA DAL TESTO">
            </div>
            <button class="w-100" type="submit"> Submit </button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>
