<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    $string = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam deleniti quia nemo a iste quasi! Ipsum numquam tempora atque quos nihil illum facilis ullam, deleniti sit eum consequuntur, quas beatae.';
  ?>

  <div>
    <p> <?php echo $string ?></p>
    <h3>La stringa ha <?php echo strlen($string) ?> caratteri</h3>
  </div>

  <?php 
  $toSearch = $_GET['bw'];
  $stringEdit = str_replace($toSearch, '***', $string);
  ?>

  <div>
    <p><?php echo $stringEdit ?></p>
    <h3>La stringa ha <?php echo strlen($stringEdit) ?> caratteri</h3>
  </div>
  
</body>
</html>