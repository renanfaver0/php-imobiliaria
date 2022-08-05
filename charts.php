<!DOCTYPE html>
<html lang="pt-br">

<head text-align:"center">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="charts.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Descrição', 'Valor'],
                <?php
                include("conexao.php");
                $sql = "SELECT * from imovel";
                $consulta = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_array($consulta)) {
                    $cidade = $dados['cidade'];
                    $valor = $dados['valor']; ?>['<?php echo $cidade ?>', <?php echo $valor ?>],
                <?php } ?>


            ]);


            var options = {
                title: 'PREÇOS DOS IMÓVEIS E LOCALIZAÇÃO'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <title>Gráfico Imóveis</title>
</head>

<body>
    <header>
        <h1 class="title-chart">LOCALIZAÇÃO E VALORES DOS IMÓVEIS</h1>
        <hr>
    </header>

    <div class="container">
        <div id="piechart" style="width: 900px; height: 500px;";></div>

    </div>
    <div class="text-center">
    <a href="index.html"><button type="button" class="btn btn-danger">Voltar a Página inicial</button></a>
    </div>

</body>

</html>