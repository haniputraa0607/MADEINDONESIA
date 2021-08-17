<?php 
  //Case 1
  echo"Case 1 : <br><br>";
  $angka = '9.327.421';
  echo "String = $angka <br>";
  $array = allgidit($angka);
  function allgidit($angka){
    $pecahdulu = explode('.',$angka);
    $tanpatitik = implode($pecahdulu);
    var_dump($tanpatitik);
  } 


?>