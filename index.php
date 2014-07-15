<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ben Murray's DevOps Test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  </head>
  <body>

    <div class="hero-unit">
    <?php if (!empty($_POST)): ?>
    <p>
      Hello, <?php echo htmlspecialchars($_POST["name"]); ?>!<br>
    </p>
    <?php else: ?>
    <form role="form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Username">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email">
      </div>

    <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <?php endif; ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
<?php

?>
