<?php
$hello = "hello world";
$world = "world hello";
$bool = 1;
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
    <?php if ($bool == 2) {?>
        <p><?php echo $hello?></p>
    <?php } else {?>
        <p><?php echo $world?></p>
    <?php }?>
</body>
</html>