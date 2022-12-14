<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuViaje.Design</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>

    <h1 class="tituloPrincipal">TuViaje.Design </h1>

    <nav>
        <ul>
        <?php
          // $buscador=[];
          $buscador = array();
          $buscador ['Principal'] = "index.php";
          $buscador ['Tips'] = "tips.php";
          $buscador ['Contacto'] = "contacto.php";
          $buscador ['Paquetes'] = "listaArticulos.php";

          foreach($buscador as $botones=>$links)
          {
            print "<li><a href=$links>$botones </a></li>";
          }

        ?>


        </ul>
    </nav>

</header>