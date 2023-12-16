<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Калькулятор</title>
</head>
<body>
   <div class="wrapper">
      <form action="/result.php" class = 'form'>
      <input type="text" name="x1" class = 'inputText'>
      <select name="operatoin">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>
      <input type="text" name="x2" class = 'inputText'>
      <input type="submit" value = "Посчитать" class = 'inputText'>
   </form>
   </div>   
</body>
</html>