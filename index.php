<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Divisas</title>
</head>
<body>
    <h1>Conversor de divisas</h1>
    <form action="conversion.php" method="POST">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required>
        <br><br>

        <label for="origen">Convertir de:</label>
        <select name="origen">
            <option value="EUR">Euro (EUR)</option>
            <option value="USD">Dólar (USD)</option>
            <option value="GBP">Libra Esterlina (GBP)</option>
            <option value="CNY">Yuan (CNY)</option>
        </select>
        <br><br>

        <label for="destino">Convertir a:</label>
        <select name="destino">
            <option value="EUR">Euro (EUR)</option>
            <option value="USD">Dólar (USD)</option>
            <option value="GBP">Libra Esterlina (GBP)</option>
            <option value="CNY">Yuan (CNY)</option>
        </select>
        <br><br>

        <input type="submit" value="Convertir">
    </form>
</body>
</html>



