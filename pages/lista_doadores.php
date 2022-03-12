<?php 
include ("conexao.php");

$sql = "SELECT * FROM bd_doacao";
$res = mysqli_query($con, $sql);

while($linha = mysqli_fetch_array($res)){
    echo $linha[''];
    echo"<br>";
}
?>