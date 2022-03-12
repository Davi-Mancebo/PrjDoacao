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
            <div class="title">
                <h2>Doe Aqui</h2>
                <p>Preencha todos seus dados para que sua doação seja efetivada</p>
            </div>

            <div class="formulario">
                <form action="inserir_doacao.php" method="post">
                    <p>Nome</p>
                    <input type="text" name="nome" placeholder="Digite Aqui">
                        
                    <br>

                    <p>Instituição</p>
                    <input type="radio" name="inst" value="1">Instituto Neymar Júnior <br>
                    <input type="radio" name="inst" value="2">Yo Gamers do Bem <br>
                    <input type="radio" name="inst" value="3">Hope for Paws

                    <p>Valor da Doação</p>
                    <select name="Vselect" id="">
                        <option value="">Selecione o valor</option>
                        <option value="10">R$10,00</option>
                        <option value="20">R$20,00</option>
                        <option value="30">R$30,00</option>
                    </select>  
                    <br>  
                    <input type="checkbox" name="ckb" value="true">Outros Valores   
                    <input type="number" step=0.01 name="Voutro">
                    <br>
                    
                    <button type="submit">DOAR</button>
                </form>
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