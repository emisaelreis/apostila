<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Prestação</title>
</head>
<body>
    <form action="proc.php" method="post">
        <table width="40%">
            <tr>
                <th colspan="2">Cálculo de Prestação</th>
            </tr>
            <tr>
                <td><label for="valor">Valor</label></td>
                <td align="right"><input type="text" name="valor"></td>
            </tr>
            <tr>
                <td><label for="taxa">Taxa</label></td>
                <td align="right"><input type="text" name="taxa"></td>
            </tr>
            <tr>
                <td><label for="atrazo">Atrazo</label></td>
                <td align="right"><input type="text" name="atrazo"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>