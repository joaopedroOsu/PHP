<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Froms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="" method="get">
<input type="text" name="nome" placeholder="Digite seu nome">
<input type="number" name="idade" placeholder="Digite sua idade" >

<button type="submit">verify</button>

</form>

<div>
<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];
if($idade <16) {
    echo "$nome, você não pode votar";

}
else if ($idade < 18 || $idade >= 65) {
    echo "$nome, o seu voto é facultativo";
}
else {
    echo "$nome, Você é obrigado a votar";
}

?>
</div>

</body>
</html>