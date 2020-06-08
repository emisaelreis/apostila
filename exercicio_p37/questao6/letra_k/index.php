<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dólares para Reais</title>
    <style>
        input {
            text-align:right;
        }
        #result td:nth-child(2){
            padding: 3px;
            text-align:right;
        }

        #result th {
            background-color: #e2e9e6; 
        }
        
        #tab_in th {
            background-color: #e2e9e6; 
        }

        #tab_in td:nth-child(2){
            text-align:right;
        }
    </style>
</head>
<body>
    <form action="proc.php" method="post">
        <table id="tab_in" border="0" width="40%">
            <tr>
                <th colspan="2">Conversão de Dólares para Reais</th>
            </tr>
            <tr>
                <td><label for="qtd_dolar">Dólares</label></td>
                <td align="right"><input type="text" name="qtd_dolar"></td>
            </tr>
            <tr>
                <td><label for="cotacao">Cotação</label></td>
                <td align="right"><input type="text" name="cotacao"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>