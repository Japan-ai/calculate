<?php
    session_start();//CSRF対策
    require_once(__DIR__ . '/config.php');
    require_once(__DIR__ . '/functions.php');
    require_once(__DIR__ . '/Calculator.php');

    $calculatorApp = new \MyApp\Calculator();
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ope = $_POST['operation'];
    $result = $calculatorApp->calc($ope,$num1,$num2);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>calculator</title>
<!-- 読込み -->
<!-- main.css -->
<link rel="stylesheet" href="main.css">
</head>
<body>
  <form action="index.php" method="post">
      <input type="text" name ="num1" >
      <select class="select-btn" name="operation" id="">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="x">×</option>
      <option value="÷">÷</option>
      </select>
      <input type="text" name="num2">
      <p>計算結果:<?php echo $result; ?> </p>
      <input class="calculation-btn" type="submit" value="計算する">
      <input class="clear-btn" type="reset" name="clear" value="クリア">
  </form>
</body>
</html>