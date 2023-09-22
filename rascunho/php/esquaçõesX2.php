<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esquações em zz  achando  x <sup>2</sup> </title>
    <link rel="stylesheet" href="../css/formatação.css">
    <link rel="stylesheet" href="../css/tabelas.css">
</head>
<body>
    <?php
    $valor =$_POST['num'];
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];

    echo 'Equações em zz '.$valor.' de : <br><br>';

 
    echo "<table  >";
    
     echo '<caption><span class="traço">'. $A. '</span> <span class="traço">x</span> <sup>2</sup>+
    <span class="traço">'.$B.'</span> = <span class="traço">'.$C.'</span></caption><br>';
   

            for($x = 0 ;$x< $valor; $x++ ){ 
            
            $rep = ($A*pow($x,2))+$B;
            $ret = $rep % $valor;

            echo "<tr>";
            
            echo "<td >";
            echo "  SE x = <span class='traço'>". $x."</span> => ";
            echo "</td>";

            echo "<td >";
            echo'<span class="traço">'. $A .'</span> <span class="traço"> .'.$x.'</span><sup>2</sup> + <span class="traço">'.$B." </span> = ";
            echo "</td>";
            echo "<td>";
          echo '<span class="traço">'. $ret.'</span> <span class="traço">';
            echo "</td>";
            
            echo "</tr>";
              
            
            }

        echo "</table>";
    
    
    ?>

  
    
</body>
</html>