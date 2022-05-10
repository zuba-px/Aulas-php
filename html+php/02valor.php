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
        $nome= isset( $_GET["nome"])? $_GET["nome"]:"[]nao configurado";
        $ano=  isset( $_GET["ano"])? $_GET["ano"]:"[]nao configurado";
        $sexo=isset( $_GET["sexo"])? $_GET["sexo"]:"[]nao configurado";
        $idade= date("Y") - $ano;
        echo"$nome é $sexo e tem $idade anos";

        
    ?>
    <a href="02.html">Voltar</a>
</div>
</body>
</html>