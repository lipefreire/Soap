<?php
    require "nusoap.php";
    $client = new nusoap_client("http://localhost/soap/service.php?wsdl");
    //$nome_do_livro = $_REQUEST['nome_do_livro'];
    //$preco = $client -> call("preco", array("nome" => "$nome_do_livro"));

    $clientCalc = new nusoap_client("http://www.dneonline.com/calculator.asmx?WSDL", "WSDL");
    $a = 5;
    $b = 2;
    $resultadoCalc = $clientCalc -> call("Add", array("intA" => "$a", "intB" => "$b"));

    $clientCEP = new nusoap_client("https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl", "WSDL");
    $resultadoCEP = $clientCEP -> call("consultaCEP", array("cep" => "56318080"));
?>


<html>
    <body>
        <!-- <h1 class="margin-top: 100px">
            Preço do livro <?php echo $nome_do_livro. ": ".$preco?>
        </h1> -->

        <div class='box'>
            <h2>Calculadora soma: </h2>
        </div>

        <h1>
            <?php echo $resultadoCalc ["AddResult"];?>
        </h1>

        <h1>
            <?php
            echo $resultadoCEP ["return"]["end"];
            echo $resultadoCEP ["return"]["bairro"];
            echo $resultadoCEP ["return"]["cidade"];
            ?>
        </h1>
    </body>
</html>