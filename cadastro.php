<?php

// Conecta ao banco de dados
include('conectadb.php');

// Verifica se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO tb_formulario (form_nome, form_idade, form_genero, form_datanascimento, form_email, form_telefone)
    VALUES ('$nome', '$idade', '$genero', '$nascimento', '$email', '$telefone')";

    // Executa a query
    if (mysqli_query($link, $sql))
    {
        // Redireciona para a página de download após o envio do formulario
        header('Location: pagina-download.php');
        exit;
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <div class="topo-pagina">
            <div class="icon"><a href="index.php"><img src="img/icon_sonic.png" alt="Icon Sonic" width="200px" height="170px"></a></div>
            <div class="topo-titulo"><img src="img/titulo_sonic_game.png" alt="titulo jogo" width="270px" height="270px"></div>
            <div class="eggman-topo"><a href="https://youtu.be/q46emsU3JH4?si=f46nWeEX4XavXkEy"><img src="img/eggman-topo.png" alt="eggman png" width="300px" height="250px"></a></div>
        </div>
        <div class="topobackgroundimg"></div>
    </div>

    <div class="container-global">
        <div class="sobre">
            <div class="sobre-conteudo">
                <h1 class="welcome">Cadastre-se e jogue!</h1>
                <div class="txt-conteudo">
                    <text>
                        <br>
                        <br>
                        Para baixar a fangame é necessário se cadastrar e preencher um pequeno formulário.  
                        <br>
                        Seus dados serão utilizados para <s>vender curso</s> entrarmos em contato e pedirmos seu feedback :D
                        <br>
                        <br>
                        Após terminar de preencher o formulário clique no botão "ENVIAR FORMULARIO", e você
                        <br>
                        será redirecionado para a página de download!
                        <br>
                        <br>
                        <div class="formulario">
                            <div class="formulario-background">
                                <form method="post" action="">
                                    <br>
                                    <text class="formularioPreencha">Preencha o formulario</text>
                                    <br>
                                    <br>
                                    <label for="nome">Nome/Nickname</label>
                                    <br>
                                    <input type="text" placeholder="Digite seu nome" id="nome" name="nome" required>
                                    <br>
                                    <br>
                                    <label for="idade">Idade</label>
                                    <br>
                                    <input type="number" placeholder="Digite sua idade" id="idade" name="idade" required>
                                    <br>
                                    <br>
                                    <label for="genero">Gênero</label>
                                    <br>
                                    <select name="genero" id="genero" required>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="outros">Outros</option>
                                        <option value="nãodizer">Prefiro não dizer</option>
                                    </select>
                                    <br>
                                    <br>
                                    <label for="nascimento">Data de Nascimento</label>
                                    <br>
                                    <input type="date" name="nascimento" id="nascimento" required>
                                    <br>
                                    <br>
                                    <label for="genero">Email</label>
                                    <br>
                                    <input type="email" placeholder="Digite seu email" name="email" id="email" required>
                                    <br>
                                    <br>
                                    <label for="telefone">Telefone</label>
                                    <br>
                                    <input type="tel" placeholder="(00)00000-0000" maxlength="14" name="telefone" id="telefone" required>
                                    <br>
                                    <br>
                                    <div class="cadastrar"><input type="submit" value="ENVIAR FORMULARIO"></div>
                                    <br>
                                </form>
                            </div>
                        </div>
                        <br>
                    </text>
                </div>
            </div>
            <div class="sobre-backgroundimg"></div>
         </div>
    </div>
</body>

<script src="script/script.js"></script>

<footer class="rodape">
    <div class="rodape-container">
        <main class="map">
            <div class="titulo-rodapé"><img src="img/titulo_sonic_game.png" alt="" width="300px" height="265px"></div>
            <p>&copy; Todos os direitos reservados</p>
        </main>
        <div class="shadow-rodape"><a href="https://youtube.com/shorts/qPFsmAWf2nc?si=uVQnLlDxtclnDZOC"><img src="img/shadow-rodape.png" alt="" height="250px" width="300px"></a></div>
    </div>
</footer>

</html>