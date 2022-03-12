<?php //configuração de conexão ao banco de dados
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bd_doacao";

//conectar ao mysql
//selecionar o bd

$con = mysqli_connect($server, $user, $pass);//conecta ao mysql
    if($con == false){
        die("Erro ao conectar");
    }
    //echo "A conexão foi bem sucedida <br>";

    $db = mysqli_select_db($con,$bd); //conecta ao bd
        if($bd == false){
            die("Erro ao selecionar banco");
        } //acesso ao banco de dados 

?>