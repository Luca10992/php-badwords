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
        <h1>
            <?= "Paragrafo: ".$paragraph ?> <br>
            <?= "Parola da censurare: ".$censured_word ?>
        </h1>
        <h2>
            <?= "Numero Caratteri: ".$paragraph_length ?> <br>
            <?= $censure ?>  
        </h2>
    </div>
    
</body>
</html>