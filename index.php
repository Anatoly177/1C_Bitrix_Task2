<?php
if (isset($_POST['send'])) {
    echo "Привет, " . $_POST['name'] . " " . $_POST['surename'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tas2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <form method="POST">
            
  <div class="form-group">
  <label for="name" class="form-label">Имя</label>
    <input name="name" type="text" class="form-control" id="name"><br>


  <div class="form-group">
    <label for="surename" class="form-label">Фамилия</label>
    <input name="surename" type="text" class="form-control" id="surename"><br>
 
  </div>
  <button name="send" type="submit" class="btn btn-primary">Отправить</button>
 </div>
</form>
        </div>
    </div>
</div>
</body>
</html>
