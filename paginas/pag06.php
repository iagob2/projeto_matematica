<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto de Matemática</title>
    <link rel="stylesheet" href="../css/formatação.css">
    <link rel="stylesheet" href="../css/tabelas.css">
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
        <br> <br>
        <form action="#" method="post" >

        <label for=""> Digite o numero da tábua de ZZ </label>
                <input type="number" name="num"><br><br>
        
                <label for="">Digite os numeros para completar a formular: <span class="traço">A</span><span class="traço">x</span><sup>2</sup>+
                    <span class="traço">B</span><span class="traço">y</span><sup>2</sup>=<span class="traço">C</span></label><br>
                    <label for="" >Digite o A :</label>
                    <input type="number" name="A">
                    <label for="" >Digite o B :</label>
        
                    <input type="number" name="B">
                    <label for="" >Digite o C:</label>
        
                    <input type="number" name="C"> 
        
                <input type="submit" value="calcular" name="calcular"> 
    
          
         
           
            </form></section>

        <section id='resp'>
            <?php 
            if(!empty($_POST['calcular'])) {

                $valor =$_POST['num'];
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];

    echo '<h1>Equações em zz '.$valor.' de :</h1> <br><br>';
    
 
    echo "<table  >";
    echo '<caption><span class="traço">'.$A.'</span><span class="traço">x</span><sup>2</sup>+
    <span class="traço">'.$B.'y</span><sup>2</sup> = <span class="traço">'.$C.'</span></caption><br>';

   
        for($x= 0 ; $x<$valor;$x++){
            echo "<tr>";
            echo "<th colspan='3'>";
            echo "  SE  x = <span class='traço'>". $x."</span> ";
            echo "</th>";
            echo "</tr>";
            for($y = 0 ;$y< $valor; $y++ ){   
            $rep = ($A*pow($x,2))+($B*pow($y,2));
            $ret = $rep % $valor;

            echo "<tr>";
            
            echo "<td >";
            echo "  SE y = <span class='traço'>". $y."</span><sup>2</sup> => ";
            echo "</td>";

            echo "<td >";
            echo'<span class="traço">'. $A .'</span>.  <span class="traço">  '.$x.'</span><sup>2</sup>+<span class="traço">'.$B.'</span>.<span class="traço">'.$y."</span> <sup>2</sup> = ";
            echo "</td>";

            echo "<td>";
            echo '<span class="traço">'. $ret.'</span> <span class="traço">';
            echo "</td>";
            
            echo "</tr>";
              
            
            }}


        echo "</table>";
    
            }

             
             
                
                          
                        
                    
                

              
       
            
            ?>


        </section>

    </main>
    
</body>
</html>