<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume de uma lata</title>
</head>
<body>
    <h3>Calculando o Volume de uma latra</h3>
    <form action="proc.php" method="post">
        <table>
            <tr>
                <td width="80px">
                    <label for="raio">Raio</label>
                </td>
                <td>
                    <input type="text" name="raio" id="raio">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="altura">Altua</label>
                </td>
                <td>
                    <input type="text" name="altura" id="altura">
                </td>
            </tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Calcular">
                </td>
            </tr>
        </table>        
    </form>
</body>
</html>