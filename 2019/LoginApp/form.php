<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container">
    <h3>Login Form</h3>
    <form action="result.php" method="POST">
      <div class="input-group mb-3">
        <input type="text" required class="form-control" name="mail" placeholder="mail" aria-label="mail" aria-describedby="sample1">
        <div class="input-group-append">
          <span class="input-group-text" id="sample1">@example.com</span>
        </div>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="sample2">KEY</span>
        </div>
        <input type="password" required class="form-control" name="pass" placeholder="password" aria-label="password" aria-describedby="sample2">
      </div>
      <input type="submit" value="login">
    </form>
  </div>
  </body>
</html>
