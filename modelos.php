<?php
    require_once "client.php";
    $marca = $_GET["marca"];
    $marcaSinComillas = str_replace('\'', '', $marca);
    $modelos = $client->ObtenerModelosPorMarca($marca);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }
        img{
            width:200px;
            height: 100px;
        }
    </style>
</head>
<body>


<h1>Modelos disponibles marca: <?=$marcaSinComillas?></h1>

<?php
    foreach ($modelos as $modelo => $valorModelo) {
?>

    <figure>
        <img src="Marcas/<?=strtolower($marcaSinComillas)?>.png" alt="logo <?= $marcaSinComillas ?>" />
        <figcaption><?=$valorModelo?></figcaption>
     </figure>

   <?php
    }
?>
  
</body>
</html>


