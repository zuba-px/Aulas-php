<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php 
          $F= isset($_GET["val"]) ? $_GET["val"]:1;   
           echo "<h1>Calculando o fatorial de $F <h1/>";
           $c = $F;
           $fat=1;
           do{
               $fat = $fat * $c;
               $c--;

           }while($c >=1);
           echo "<h2>$F ! = $fat  <h2/>";
    ?>
    <a href="DoWhile02.html">Voltar</a>
</div>
</body>
</html>
 

