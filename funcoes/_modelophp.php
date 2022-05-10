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
    $n1= $_GET["a"]; /*na url do site colocar  ?x=number*/
    $n2= $_GET["b"];
    $m= ($n1 + $n2) / 2; 
      echo "<h2>Valores recebidos: $n1 e $n2<h2/>";
      echo "<br/><br/>A soma vale ". ($n1+$n2);
      echo "<br/>A subracao vale ". ($n1-$n2);
      echo "<br/>A multiplicacao vale ". ($n1*$n2);
      echo "<br/>A divisao vale ". ($n1/$n2);
      echo "<br/>O modulo vale ". ($n1%$n2);
      echo "<br/> A media vale $m";
        
    ?>
</div>
</body>
</html>
 