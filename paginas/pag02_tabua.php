<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto de Matemática</title>
    <link rel="stylesheet" href="../style/formatação.css">
    <link rel="stylesheet" href="../style/tabelas.css">
</head>
<body>
    <header>

    <h1><a href="../index.html"> Projeto de Matemática - Fórmulas:</a></h1>
    <nav>
        <a href="pag02_tabua.php">Tábua zz</a>
        <a href="pag03.php"><span class="traço">a</span>x+<span class="traço">b</span> = <span class="traço">c</span></a>
        <a href="pag04.php"><span class="traço">a</span>x+<span class="traço">b</span>y = <span class="traço">c</span></a>
        <a href="pag05.php"><span class="traço">a</span>x<sup>2</sup>+<span class="traço">b</span> = <span class="traço">c</span></a>
        <a href="pag06.php"><span class="traço">a</span>x<sup>2</sup>+<span class="traço">b</span>y<sup>2</sup> = <span class="traço">c</span></a>
        <a href="pag07.php"><span class="traço">a</span>x<sup>2</sup>+<span class="traço">b</span>y = <span class="traço">c</span></a>
        <a href="pag08.php"><span class="traço">a</span>x+<span class="traço">b</span>y = <span class="traço">c</span></a>
    </nav>
    </header>

    <main>
        <section id="form">
        
        <form action="#" method="post" >
            <label for=""> Digite o numero para ver sua tábua de ZZ </label>
            <input type="number" name="num">
            <input type="submit" value="calcular" name="calcular">
            </form></section>

        <section id='resp'>
          
            <?php 
            if(!empty($_POST['calcular'])) {
                echo "<script src='../scripts/ADD_pedding.js'>
                
                 </script>";
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
                
            }
            
            ?>

  
        </section>

    </main>
    
</body>
</html>