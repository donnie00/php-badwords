<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Php Bad Words</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="text-bg-dark">
   <div class="container text-center my-3">
      <form action="messageToCheck.php" method="POST">
         <h1 class="mb-3">Inserisci la parola da censurare</h1>
         <input class="form-control mb-3" type="text" name="word" placeholder="Inserisci la parola che vuoi censurare"></input>

         <h1 class="mb-3">Inserisci il messaggio da controllare: </h1>
         <div class="input-group">
            <textarea class="form-control" name="message" cols="30" rows="5" placeholder="La parola scritta sopra verrà censurata all'interno del messaggio..."></textarea>
            <button class="btn btn-primary" type="submit">Check</button>
         </div>
      </form>
   </div>
</body>
</html>