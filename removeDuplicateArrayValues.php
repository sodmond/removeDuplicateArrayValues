<?php
function removeDuplicate($arr){
  $new = array();
  foreach($arr as $val){
      if(!in_array($val, $new)){
           $new[] = $val;
      }
  }
  print_r($new);
}
$arr = array("1", "3", "1", "Hello", "1", "3", "Hello");

removeDuplicate($arr);
