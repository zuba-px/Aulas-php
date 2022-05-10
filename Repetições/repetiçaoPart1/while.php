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
    $inicio= isset($_GET["ini"])?($_GET["ini"]):0;
    $termino= isset($_GET["ter"])?($_GET["ter"]):0;
    $incremento= isset($_GET["inc"])?($_GET["inc"]):0;
    $comando = $inicio < $termino ? true : false;
    
     
    if($comando){
        while($inicio <= $termino){
            echo "$inicio <br/>";
            $inicio += $incremento;
        }
        
    }else{
        while($inicio >= $termino ){
            echo $inicio;
            $inicio += $incremento;
        }
    }
  
    
    ?>
    
</div>
</body>
</html>
 