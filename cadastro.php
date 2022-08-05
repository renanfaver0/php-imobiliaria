<?php
    include("conexao.php");

    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $valor = $_POST['valor'];


    $sql = "INSERT INTO imovel(cep, rua, numero, bairro, cidade, estado, valor) VALUES ('$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$valor')";


    

    if(mysqli_query($conexao,$sql)){
            
        echo "O seu imóvel foi cadastrado com sucesso! Obrigado" ."<br><br>". "" ;
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    echo "<a href=\"index.html\">Clique aqui para retornar a página de cadastros! =)</a>";

    @$pagina = $_GET['a'];

    if(isset($pagina)){
    include $pagina;
    }
    
    mysqli_close($conexao);
?>