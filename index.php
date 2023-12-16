<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/base.css">
   <title>Калькулятор</title>
</head>
<body>
   <div class="wrapper">
      <form action="/result.php" class = 'form'>
      <input type="text" name="x1">
      <select name="operatoin">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>
      <input type="text" name="x2">
      <input type="submit" value = "Посчитать">
   </form>
   </div>   
</body>
</html>