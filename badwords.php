<?php

$censored = str_ireplace($_POST['badword'], '***', $_POST['paragraph']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Badwords Censored</title>
</head>
<body>

    <div class="py-5 bg-primary vh-100 d-flex justify-content-center flex-wrap">
        <div class="mx-5 mt-5">
            <div> <strong>Il tuo testo: </strong> <span class="text">"<?php echo $_POST['paragraph']; ?>"</span></div>
            <div class="mb-5"> <strong>La lunghezza del tuo testo è di </strong> <mark> <?php echo strlen($_POST['paragraph']); ?> caratteri</mark></div>
            <div> <strong>Il tuo testo censurato: </strong> <span class="text">"<?php echo $censored; ?>"</span></div>
            <div> <strong>La lunghezza del tuo testo censurato è di </strong> <mark> <?php echo strlen($censored); ?> caratteri </mark> </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>