<?php 
$paragrafo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur quos iste obcaecati omnis nisi ea possimus voluptatum alias, accusantium reiciendis rem cumque nihil iure laborum natus dolor sed! Quos, at!";
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
  <p><?php echo str_replace($_GET["censura"],"***", $paragrafo) ?></p>
  <h2>La lunghezza del paragrafo è di <?php echo strlen("$paragrafo")?> caratteri</h2>
</body>
</html>