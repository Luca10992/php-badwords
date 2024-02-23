<?php

    $paragraph = $_GET['paragraph'];
    $paragraph_length = strlen($paragraph);
    $censured_word = $_GET['censured-word'];
    $censure = str_replace($censured_word, "***", $paragraph)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>

    <div class="container my-5">
        <h1 class="text-danger">
            <?= "Paragrafo: "?>
        </h1>
        <h2>
        <?= $paragraph ?> <br>
        </h2>
        <h1 class="text-danger">
            <?= "Parola da censurare: " ?>
        </h1>
        <h2>
            <?= $censured_word ?>
        </h2>
        <h1 class="text-danger">
            <?= "Numero Caratteri: " ?>
        </h1>
        <h2>
            <?= $paragraph_length ?>
        </h2>
        <h1 class="text-danger">
            <?= "Paragrafo Censurato: " ?>
        </h1>
        <h2>
            <?= $censure ?>  
        </h2>
    </div>
    
</body>
</html>