<?php 
$nome = $_POST["nome"] ?? "nome inválido";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá <?= htmlspecialchars($nome); ?>!</h1>
</body>
</html>