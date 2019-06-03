<?php

class badClassName
{
  public function __construct() {
    $x = [
      1,
      2,
      3
    ];
    
    if(!$x){
      return;
    }
    
    if($x){
      return;
    }
    
    echo 'hello';
  }
}
