<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Quadrados de Três Números</title>
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
                <th colspan="2">Soma dos Quadrados de Três Números</th>
            </tr>
           
            <tr>
                <td><label for="num_a">Número A</label></td>
                <td align="right"><input type="text" name="num_a" value=""></td>
            </tr>
            <tr>
                <td><label for="num_b">Número B</label></td>
                <td align="right"><input type="text" name="num_b" value=""></td>
            </tr>
            <tr>
                <td><label for="num_c">Número C</label></td>
                <td align="right"><input type="text" name="num_c" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>
</html>