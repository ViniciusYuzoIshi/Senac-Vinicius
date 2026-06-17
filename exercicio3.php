<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php
    print "testando<br>";

    // Declarando uma variável de memória
    $nome;

    // atribuindo um valor à variável
    $nome = 'João';

    // imprimindo a variável
    print $nome;

    // case sensitive
    print $Nome; // mensagem de erro na linha 26 já esperado
?>

</body>
</html>