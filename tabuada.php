<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form method="get" action="">
    <h1 style="color: blue; text-align: center;"> Tabuada <br><br> </h1>
    <label> </label>
    <input type="number" name="number" max="1000" min="2">
    <input type="submit" value="OK">
    <h2 style="color: green;">Tabuada do <?php echo $_GET["number"];?></h2>
    <br><br>

<?php
    for ($contador=1; $contador <= 10; $contador++) {
        // imprimindo a linha com o resultado
        // code...
        echo $_GET["number"]." x ".$contador." = ".$_GET["number"] * $contador."<br>";
    }
?>
</form>
</body>
</html>