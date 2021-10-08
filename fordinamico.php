<?php

define('MAX',3);
define('MAX1',3);
   for($i=0;$i<MAX;$i++){
    
    
       for($j=0;$j<MAX1;$j++){
        $num=rand(1, 100);
        $numeros[$j]=$num;
       }
      $array[$i]=$numeros;
   }
 
  echo "<table border>" ; 
   foreach($array as $clave=>$valor){
       echo "<tr><th>";
    echo $clave;
    echo "</th>";
  foreach($valor as $valor1){
      echo "<td>";
   echo $valor1;
   echo "</td>";
  }
   echo "</tr>";

}

echo "</table>";

    
?>
