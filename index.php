<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo"Gerando um numero aleatorio entre $min e $max...
        <br>o valor gerado foi <strong>$num</strong><p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar novo</button>
