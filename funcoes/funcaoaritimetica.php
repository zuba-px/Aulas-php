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
    $v1 = $_GET["x"]; /*na url do site colocar  ?x=number*/
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br/>A raiz de $v1 e " . sqrt($v1);
    echo "<br/>O valor de $v2 arredondado e " . round($v2); // ceil ou floor
    echo "<br/>A parte inteira de $v2 e " . intval($v2);
    echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1,2,",", ".");
    
        
    ?>
</div>
</body>
</html>