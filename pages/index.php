<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CDJ Doações</title>
        <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time();?>"> <!--echo time() força o css a funcionar dentro do php-->
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
            <div class="title">
                <h2>Seja Bem Vindo</h2>
                <p>
                    Estamos aqui em parceria com algumas instituições de caridade e precisamos da sua 
                    ajuda, pode ser doando qualquer valor.
                    O dinheiro será direcionado as instituições de caridade a seguir, então doe para qual você quiser!
                </p>
            </div>
            <div>
                <div class="card">
                    <img src="../assets/imagens/neymarJunior.png" alt="">
                    <a href="https://www.institutoneymarjr.org.br/" target="_blank">Instituto Neymar Júnior</a>                    
                </div>
                <div class="card">
                    <img src="../assets/imagens/yogamers.jpg">                    
                    <a href="https://yogamersdobem.com/" target="_blank">Yogamers do Bem</a>
                </div>
                <div class="card">
                    <img src="../assets/imagens/hpfw.jpg" alt="">
                    <a href="https://www.hopeforpaws.org/" target="_blank">Hope For Paws</a> 
                </div>
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