<?php
$result = require __DIR__ . '/cals.php' ;
?> 

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>

<body>
    <b class = 'res'>Результат вычеслений:</b> 
    <br>
    <?= $result ?>
</body>

</html>