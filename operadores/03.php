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
       /*Praticando o uso de variaveis referenciadas*/ 
       $a=3;
       $b=&$a; /*O & esta fazendo com que o (a) seja igual ao b */ 
       $b+=5;
       echo"A varial a recebe $a";
       echo"<br/>A variavel b recebe $b";
        
    ?>
</div>
</body>
</html>