<?php
    include("../pages/conexao.php");

    $sql = "SELECT NOME, INSTI, VALOR FROM doador WHERE INSTI = 'Yo Gamers do Bem'";
    $res = mysqli_query($con, $sql);

    if($res == false){
        die ("Erro ao consultar");
    }
    $i = 0;
    $total = 0;

    while($linha = mysqli_fetch_array($res)){
        echo "<li>";
        echo $linha['NOME'];
        echo " | ";
        echo $linha['INSTI'];
        echo "</li>";
        $i++;
        $total = $total + $linha['VALOR'];
    }
    if($i == 0){
        echo "Sem doadores";
    }
    echo "Total arrecadado: R$ ".number_format($total, 2, ',','.');
?>