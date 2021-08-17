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
  
  
  //Case 2
  echo"<br>Case 2 : <br><br>";
  $arrayangka = range(1,9);
  segitiga($arrayangka);
  function segitiga($angka){
    $panjang = count($angka)-1;
    for($i=0;$i<=$panjang;$i++){
      for($j=$i;$j<=$panjang;$j++){
        echo "$angka[$j] ";
      }
      echo "<br>";
    }
  }
  

  //Case 3
  echo"<br>Case 3 : <br><br>";
  $odd = 15;
  echo "Odd = $odd<br>";
  $result = cariodd($odd);
  $panjangresult = count($result);
  echo "Result = $panjangresult---->[";
  for($i=0;$i<=$panjangresult-1;$i++){
    if($i==$panjangresult-1){
      echo "$result[$i]]";
    } else {
      echo "$result[$i],";
    }
  }
  function cariodd($odd){
    $array3 = range(1,$odd);
    $panjang3 = count($array3)-1;
    $indexresult = 0;
    for($i=0;$i<=$panjang3;$i++){
      if($array3[$i]%2!=0&&$array3[$i]!=$odd){
        $result[$indexresult]=$array3[$i];
        $indexresult++;
      }
    }
    return $result;
  }

?>