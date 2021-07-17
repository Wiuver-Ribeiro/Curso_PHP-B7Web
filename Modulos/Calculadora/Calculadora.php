<?php 

class Calculadora {
  public  $total;


  public function add($n) {
    $this->total += $n;
  }

  public function sub($n) {
    $this->total -= $n;
  }

  public function multiply($n) {
    $this->total *= $n;
  }

  public function divide($n) {
    $this->total /= $n;
  }

  public function total() {
   return  $this->total;
  }
}