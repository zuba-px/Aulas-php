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
    $c = 1;
    while ($c <= 5) {
        echo "Valor $c: " . (isset($_GET["v$c"]) ? $_GET["v$c"] : 0) . "<br/>";
        $c++;
    }
    
    ?>
    <a href="while02.php">Voltar</a>
    
</div>
</body>
</html>
 