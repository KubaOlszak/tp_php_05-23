<?php

$name;
if(isset($_GET['firstname']) && !empty($_GET['firstname'])) {
  $name = $_GET['firstname'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <form action="" method="GET">
      <input type="text" name="firstname">
      <input type="submit" name="submit" value="Send">
    </form>
    <p>
      Name : <?php if (isset($_GET['submit'])) { echo $name; } ?>
    </p>
</body>
</html>