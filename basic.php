<?php 
  //Case 1
  echo"Case 1 : <br><br>";
  $angka = '9.327.421';
  echo "String = $angka <br>";
  $array = allgidit($angka);
  echo "Output = <br>";
  for($i=0;$i<=count($array)-1;$i++){
    echo "$array[$i] <br>";
  }
  function allgidit($angka){
    //hilangkan titik
    $pecahdulu = explode('.',$angka);
    $tanpatitik = implode($pecahdulu);
    //pecah 
    $pecah = str_split($tanpatitik);
    $panjangarray = count($pecah)-1;
    $belakang = 10;
    $indexpangkat = $panjangarray;
    for($i=0;$i<=$panjangarray;$i++){
      if($i==$panjangarray){
        $baru[$panjangarray]=$pecah[$panjangarray];
      } else {
        $hasil = $pecah[$i]*pow($belakang,$indexpangkat);
        $baru[$i]=$hasil;
        $indexpangkat = $indexpangkat - 1;
      }
    }
    return $baru;
  }
  
  

  
?>