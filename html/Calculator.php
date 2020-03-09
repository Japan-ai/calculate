<?php
  namespace MyApp;
  class Calculator {
    public function calc($ope,$num1,$num2){
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
      return $answer;
    }
  }
?>