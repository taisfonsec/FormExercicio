<?php
    // Coleta os dados do formulário
    $avaliacao = $_POST['avaliacao'] ?? 'Não informado';
    $corFavorita = $_POST['corFavorita'] ?? 'Não informado';
    $comentarios = $_POST['comentarios'] ?? 'Não informado';
    $nome = $_POST['nome'] ?? 'Não informado';
    $email = $_POST['email'] ?? 'Não informado';
    $fone = $_POST['fone'] ?? 'Não informado';
    $novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';

    // Imprime os dados na tela
    $avaliacao = ucfirst($avaliacao);
    echo "<p><strong>Avaliação do site:</strong> $avaliacao</p>";
    $corFavorita = ucfirst($corFavorita);
    echo "<p><strong>Cor Favorita:</strong> $corFavorita</p>";
    $comentarios = ucfirst($comentarios);
    echo "<p><strong>Comentários:</strong> $comentarios</p>";
    $nome = ucfirst($nome);
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $fone</p>";
    echo "<p><strong>Receber novidades:</strong> $novidades</p>";

    // Divide o e-mail em duas partes usando "@" como delimitador
    $emailParts = explode('@', $email);
    $provedor = $emailParts[1];

    // Exibe o provedor de e-mail
    echo "<p><strong>Seu provedor de e-mail é:</strong> $provedor</p>";

    // Exibe mensagem sobre o envio de novidades, se habilitado
    if ($novidades === 'Sim') {
        echo "<p><strong>Enviaremos para você semanalmente todas as novidades!</strong></p>";
    }

    // Verifica se há palavras positivas nos comentários
    $palavrasPositivas = ['gostei', 'legal', 'bom', 'interessante', 'feliz'];
    foreach ($palavrasPositivas as $palavra) {
        if (stristr($comentarios, $palavra) !== false) {
            echo "<p><strong>Ficamos felizes que você deixou observações positivas sobre nosso site.</strong></p>";
            break;
        }
    }

    // Verifica se a cor favorita é "preto" e envia alerta em JavaScript
    if (strtolower($corFavorita) === 'preto') {
        echo "<script>alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site: www.https://cvv.org.br/');</script>";
    }
    ?>