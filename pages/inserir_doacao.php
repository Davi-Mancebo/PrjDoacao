<?php 
include("conexao.php");

$Svalor = $_POST['Vselect'];
$Outrovalor = $_POST ['Voutro'];

//ACIMA FICA LINHA DE DADOS DE VALOR DE DOAÇÃO RECEBIDO

$Vinst = $_POST ['inst'];
if($Vinst == '1'){
    $inst = "Instituto Neymar Júnior";
}
else if($Vinst == '2'){
    $inst = "Yo Gamers do Bem ";
}
else{
    $inst = "Hope for Paws";
}

//ACIMA FICA PARA TRATAR AS INSTITUIÇÕES

$nome = $_POST ['nome'];
$valor = 0;

//ACIMA FICA LINHA PARA O BD

if(isset($_POST['ckb']) == true && $Svalor != ''){
    echo 
    "<script>
        alert('SELECIONE APENAS UM TIPO DE VALOR!!!')
        location.href = ('doar.php')
    </script>";
}

if(isset($_POST['ckb'])){
    $valor = $Outrovalor;
}
else{
    $valor = $Svalor;
}

//ACIMA FICA ADIÇÃO DO CAMPO VALOR

if($nome == ""){
    $nome = "Anônimo";
}


if($valor == false){
    echo 
    "<script>
        alert('O campo valor é obrigatorio!')
        location.href = ('doar.php')
    </script>";
} 
else{
    $sql = "INSERT INTO doador (NOME, INSTI, VALOR) VALUES ('$nome', '$inst', $valor);";
    $res = mysqli_query($con, $sql);

    if($res == false){
        die("Erro ao inserir");
    }
    else{
        echo ("<script>
                window.alert('Sua doação foi feita com sucesso! Agradecemos pela ajuda $nome! Confira quem tambem ajudou $inst.');
                if($Vinst == 1){
                    location.href = ('doadores.php?page=doadorI');
                }
                else if($Vinst == 2){
                    location.href = ('doadores.php?page=doadorY');
                }
                else{
                    location.href = ('doadores.php?page=doadorH');
                }
                </script>");
    }
}
//AQUI FICA AONDE VAI SAIR O CÓDIGO PARA O BD
?>