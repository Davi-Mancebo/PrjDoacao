<?php
    include('conexao.php');

    $menu = "../menu.php";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
        $file = "";
    
        if($page == "doadorI"){
            $file = "../doadores/neymar.php";
        }
        else if($page == "doadorY"){
            $file = "../doadores/yoda.php";
        }
        else if($page == "doadorH"){
            $file = "../doadores/hope.php";
        }        

        if(is_file($file) == false){ //is_file verifica se o arquivo existe
            $page = "error404.php";
        }
    }
    
    else{
        $file = "../doadores/todos.php";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CDJ Doações</title>
        <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time();?>">
        <link href="https://fonts.googleapis.com/css2?family=Oswald" rel="stylesheet">
        <link rel="shortcut icon" href="../assets/imagens/logoAtual2.png" type="image/x-icon">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    
    <body>
        <!--Inicio Cabeçalho-->
        <header class="cabecalho">
            <img class="logo" src="../assets/imagens/logoAtual2.png" alt="">
            <a href="quemSomos.php">Quem Somos</a>
            <a href="doadores.php">Doadores</a>
            <a href="doar.php">Doar</a>
            <a href="index.php">Home</a>            
        </header>
        <!--Fim Cabeçalho-->

        
        <!--Inicio Conteudo-->
        <div class="conteudo">
            <div class="Subcabecalho">
                <?php
                    include($menu);
                ?>
            </div>
            <div class="title">
                <h2>Doadores</h2>
                <p>
                    Obrigado a todos que tiraram um tempo para doar, 
                    e mostrar que não precisa de muito para ajudar a causa. <br>
                    Aqui vai um agradecimento a todos vocês!
                </p>
            </div>

            <div class="doadores">
                <?php
                    include($file);
                ?>
            </div>            
        </div>
        <!--Fim Conteudo-->
        <footer class="rodape">
            <div class="iconesSociais">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></i></a>
                <a href="#"><i class="fab fa-twitter"></i></i></i></a>
            </div>
            <p>Copyright <i class="fab fa-creative-commons"></i> CDJ Doações |
            Todos os direitos reservados
            </p>
        </footer>
    </body>
</html>