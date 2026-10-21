<?php

require_once __DIR__ . "/controllers/PersonagemController.php";

$controller = new PersonagemController();

$acao = $_GET["acao"] ?? "listar";

$mensagem = "";

// A lógica fica antes de qualquer HTML: o controller usa header("Location: ...")
// ao cadastrar, e isso só funciona se nada tiver sido enviado ao navegador.
if ($acao == "cadastrar") {
    $mensagem = $controller->cadastrar();
} else {
    $personagens = $controller->listar();
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de personagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if ($acao == "cadastrar") {
    require __DIR__ . "/views/cadastrar.php";
} else {
    require __DIR__ . "/views/listar.php";
}
?>

</body>
</html>