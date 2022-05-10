<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<style>
    b{
        background-color:red;
    }
</style>


<body>
<div>
    <?php 
            $N1= isset( $_GET["nota1"])? $_GET["nota1"]:"[]Algo esta errado";
            $N2= isset( $_GET["nota2"])? $_GET["nota2"]:"[]Algo esta errado";
            $F= ($N1+$N2)/2;
            echo "Você tirou $N1 e $N2, vamos ver qual foi sua nota final.</br>";
            echo "Você tirou $F</br>";

            if($F<= 4 ){
                $G="infeliz foi REPROVADO";
                $R="tera que fazer o ano novamente";
            }
            elseif($F>=5 && $F<7){
                $G="infeliz esta RECUPERAÇÃO";
                $R="fara a prova no final do ano";
            }
            else{
                $G="infeliz foi APROVADO";
                $R="a rematricula é dia 9/10";
                
            }
            echo"O  <b>$G</b> e $R ";


            



  ?>
</div>
</body>
</html>