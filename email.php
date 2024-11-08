<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "tecserv@tecserv.eng.br";
    $subject = "Profile";
    $body = "Nome: " . $nome . "\r\n" .
            "Email: " . $email . "\r\n" .
            "Mensagem: " . $mensagem;
    $header = "From: tecserv@tecserv.eng.br" . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo "Email enviado!";
    } else {
        echo "Email não enviado.";
    }

} else {
    echo "Por favor, preencha todos os campos.";
}

?>
