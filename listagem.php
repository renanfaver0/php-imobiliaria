<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Lista de Imóveis</title>
</head>

<body>
    <header>
        <h1>LISTA DE IMÓVEIS CADASTRADOS</h1>
        <br>
        <hr>
    </header>



    <table class="table table-striped">
        <thead>

            <th>

            <td class="h3">CEP</td>
            <td class="h3">Rua</td>
            <td class="h3">Numero</td>
            <td class="h3">Bairro</td>
            <td class="h3">Cidade</td>
            <td class="h3">Estado</td>
            <td class="h3">Valor</td>

            </th>

        </thead>

        <tbody>
            <?php
            include "banco.php";
            $pdo = banco::conectar();
            $sql = "SELECT idImovel, cep, rua, numero, bairro, cidade, estado, valor FROM imovel";
            foreach ($pdo->query($sql) as $row) {
                echo '<tr>';
                echo '<td>' . "" . '</td>';
                echo '<td>' . $row['cep'] . '</td>';
                echo '<td>' . $row['rua'] . '</td>';
                echo '<td>' . $row['numero'] . '</td>';
                echo '<td>' . $row['bairro'] . '</td>';
                echo '<td>' . $row['cidade'] . '</td>';
                echo '<td>' . $row['estado'] . '</td>';
                echo '<td>' . $row['valor'] . '</td>';
                echo '</tr>';
            }
            banco::desconectar();
            ?>
        </tbody>
    </table>

    <div class="text-center">
        <a href="index.html"><button type="button" class="btn btn btn-danger ">Página Inicial</button></a>
    </div>
</body>

</html>