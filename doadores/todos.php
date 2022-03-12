<?php
    include("../pages/conexao.php");

    $sql = "SELECT * FROM doador";
    $res = mysqli_query($con, $sql);

    if($res == false){
        die ("Erro ao consultar");
    }
    $i = 0;

    while($linha = mysqli_fetch_array($res)){
        echo "<li>";
        echo $linha['NOME'];
        echo " | Instituição: ";
        echo $linha['INSTI'];
        echo "</li>";
        $i++;
    }
    if($i == 0){
        echo "Sem doadores";
    }
?>