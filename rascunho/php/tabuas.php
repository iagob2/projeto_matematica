<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulas</title>
    <link rel="stylesheet" href="../css/formatação.css">
    <link rel="stylesheet" href="../css/tabelas.css">
</head>
<body>


<?php 

$valor = $_POST['num'];
echo "<h1>Tabua de ". $valor." zz </h1>";

echo "<table  >";
echo "<caption>ADIÇÃO:  </caption>";
    echo "<th>";
    echo "+";
     echo "</th>";
   for($t = 0 ; $t < $valor ; $t++ ) {
    echo "<th>";
    echo "<span class='traço'>". $t."</span>";
     echo "</th>";
   }

            for($l = 0 ;$l< $valor; $l++ ){
            echo "<tr>";
            echo "<th >";
            echo "<span class='traço'>". $l."</span>"; 
            echo "</th>";
                for($c= 0 ;$c< $valor; $c++ ){
                   $res = $c + $l;
                   $ret = $res % $valor;
                                 
                  
                   echo "<td >";
                   echo "<span class='traço'>". $ret."</span>";
                   echo "</td>";
                  
                   
                
                }
            echo "</tr>";
              
            
            }

        echo "</table>";
    //multiplicação

        echo "<table  >";
echo "<caption> MULTIPLICAÇÃO:</caption>";
    echo "<th>";
    echo " . ";
     echo "</th>";
   for($t = 0 ; $t < $valor ; $t++ ) {
    echo "<th>";
    echo "<span class='traço'>". $t."</span>";
     echo "</th>";
   }

            for($l = 0 ;$l< $valor; $l++ ){
            echo "<tr>";
            echo "<th >";
            echo "<span class='traço'>". $l."</span>"; 
            echo "</th>";
                for($c= 0 ;$c< $valor; $c++ ){
                   $res = $c * $l;
                   $ret = $res % $valor;
                                 
                  
                   echo "<td >";
                   echo "<span class='traço'>". $ret."</span>";
                   echo "</td>";
                  
                   
                
                }
            echo "</tr>";
              
            
            }

        echo "</table>";


?>

</body>
</html>
