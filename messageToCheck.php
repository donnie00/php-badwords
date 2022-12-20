<?php
var_dump($_POST);

$message = $_POST['message'];
$word = $_POST['word'];

$messageCensored = str_replace($word, '***', $message);

?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <title>Message</title>
</head>
<body class="text-bg-dark">
   <div class="container">
   <h1 class="text-center text-success my-3">Il messaggio inserito è: </h1>
   <p class="display-4"> <?php echo $message ?></p>
   <small class="text-muted">Lunghezza: <?php echo strlen($message) ?></small>

   <h1 class="text-center text-success my-3">Il messaggio censurato risulta: </h1>
   <p class="display-4"><?php echo $messageCensored ?></p>
   <small class="text-muted">Lunghezza: <?php echo strlen($messageCensored) ?></small>
   </div>

</body>
</html>