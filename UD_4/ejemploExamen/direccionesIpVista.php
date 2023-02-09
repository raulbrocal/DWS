<!doctype html>
<html>

<head>

</head>

<body>


    <h1> Listado de ips que pasan el filtro </h1>

    <?php
    require("./DireccionIpReglasNegocio.php");

    $direccionIpReglasNegocio = new DireccionIpReglasNegocio();
    $ips = $direccionIpReglasNegocio->obtenerDireccionesIpValidas();

    foreach ($ips as $ip) {
        echo "<div>";
        print($ip->getIp());
        echo "</div>";
    }
    ?>
</body>

</html>