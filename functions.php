<?php
    function preco($nome){
        $livros = Array(
            "Redes" => 140.00,
            "Java" => 200.00,
            "IHC" => 300.00
        );
        foreach($livros as $key => $value){
            if($nome == $key) {
                $preco = $value;
            }
        }
        return $preco;
    }
    function teste($numero) {
        return "O número é: " . $numero;
    }
?>