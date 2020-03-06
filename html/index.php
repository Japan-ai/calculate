<?php
    session_start();//CSRF対策
    require_once(__DIR__ . '/config.php');
    require_once(__DIR__ . '/functions.php');
    require_once(__DIR__ . '/Calculator.php');

    $calculatorApp = new \MyApp\Calculator();//Todo.phpのTodoクラスを引っ張る、インスタンスの生成
    $cal = $calculatorApp->create();//$todoAppインスタンスの中にgetAll() というメソッドを生成し、左辺に代入
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
  <form action="calculator.php" method="post">
    <div class="container">
      <input type="text" name ="num1" >
      <select class="select-btn" name="operation" id="">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="x">×</option>
      <option value="÷">÷</option>
      </select>
      <input type="text" name="num2">
      </div>
    <div class="cover">
      <input class="calculation-btn" type="submit" value="計算する">
      <input class="clear-btn" type="reset" name="clear" value="クリア">
    </div>
  </form>
</body>
</html>