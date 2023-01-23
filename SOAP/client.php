<?php
    require "nusoap.php";

    $client = new nusoap_client("http://localhost/soap/service.php?wsdl");

    $nome_do_livro = "IHC";
    $preco = $client -> call("preco", array('nome' => "$nome_do_livro"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="margin-top: 100px">Preço do livro 
        <?php echo $nome_do_livro . ":" . $preco;?>
</body>
</html>