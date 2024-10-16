<?php
$cantidad = floatval($_POST['cantidad']);
$origen = $_POST['origen'];
$destino = $_POST['destino'];

$conversion = $origen . $destino;

switch ($conversion) {
    case 'EURUSD':
        $r = $cantidad * 1.1;
        break;
    case 'EURGBP':
        $r = $cantidad * 0.86;
        break;
    case 'EURCNY':
        $r = $cantidad * 7.5;
        break;
    case 'USDEUR':
        $r = $cantidad * 0.91;
        break;
    case 'USDGBP':
        $r = $cantidad * 0.78;
        break;
    case 'USDCNY':
        $r = $cantidad * 6.8;
        break;
    case 'GBPEUR':
        $r = $cantidad * 1.16;
        break;
    case 'GBPUSD':
        $r = $cantidad * 1.28;
        break;
    case 'GBPCNY':
        $r = $cantidad * 8.7;
        break;
    case 'CNYEUR':
        $r = $cantidad * 0.13;
        break;
    case 'CNYUSD':
        $r = $cantidad * 0.15;
        break;
    case 'CNYGBP':
        $r = $cantidad * 0.11;
        break;
    default:
        $r = $cantidad; 
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión</title>
</head>
<body>
    <h1>Conversión</h1>
    <p>
        <?= $cantidad . " " . $origen . " son " . $r . " " . $destino; ?>
    </p>
    <a href="index.php">Realizar otra conversión</a>
</body>
</html>

