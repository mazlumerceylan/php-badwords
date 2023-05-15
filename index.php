<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura Parole</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
<body>
<div class="container">
        <h1 class="mt-5">Censura Parole</h1>
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="paragrafo">Scrivi un paragrafo:</label>
                <textarea class="form-control" id="paragrafo" name="paragrafo" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="badword">Scrivi la parola da censurare:</label>
                <input type="text" class="form-control" id="badword" name="badword">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>