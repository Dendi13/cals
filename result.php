<?php
$result = require __DIR__ . '/cals.php' ;
?> 

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/result.css">
<link rel="stylesheet" href="css/base.css">

    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>

<body>
    <div class="wrapper">
        <div class = 'result'>
            <div class = 'res'>Результат вычеслений: <br>
                <div class='resul'><?= $result ?></div>
            </div> 
        </div>
    
    </div>
    
</body>

</html>