<?php
  namespace MyApp;
  class Calculator {
    public function create() {//createというメソッドの生成
      if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $ope = $_POST['operarion'];

        switch($ope){
          case "+":
          $answer = $num1+$num2;
            break;
          case "-":
          $answer = $num1-$num2;
            break;
          case "x":
          $answer = $num1*$num2;
            break;
          case "÷":
          $answer = $num1/$num2;
            break;
        }
      print  "計算結果:".($num1.$ope.$num2."=".$answer);
      }
    }
  }
?>