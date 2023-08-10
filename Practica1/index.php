
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Ingrese un número</label>
        <input type="text" name="numero" id="">
        <button type=submit>Enviar</button>

    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $numero = $_POST['numero'];
    for ($i = 1; $i < 13; $i++){
        $resultado = $numero * $i;
        echo "$numero * $i = $resultado <br>";
    }
}
?>