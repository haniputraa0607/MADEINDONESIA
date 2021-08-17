<?php 
  //Case 1
  echo"Case 1 : <br><br>";
  $angka = '9.327.421';
  echo "String = $angka <br>";
  $array = allgidit($angka);
  function allgidit($angka){
    //hilangkan titik
    $pecahdulu = explode('.',$angka);
    $tanpatitik = implode($pecahdulu);
    //pecah 
    $pecah = str_split($tanpatitik);
    $panjangarray = count($pecah)-1;
    $belakang = 10;
    for($i=0;$i<=$panjangarray;$i++){
      if($i==$panjangarray){
        $baru[$panjangarray]=$pecah[$panjangarray];
        echo $baru[$panjangarray];
      } else {
        echo "yea <br>";
      }
    }

  } 


?>