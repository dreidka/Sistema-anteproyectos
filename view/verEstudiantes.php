<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Usuario</td>
                <td>Carrera</td>
                <td>Codigo</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($estudiantes as $est){
                    echo "<tr>";
                    echo "<td>". $est['Nombre'].$est['Apellido']."</td>";
                    echo "<td>". $est['Carrera']."</td>";
                    echo "<td>". $est['Codigo']."</td>";
                    echo "</tr>";

                }
            ?>
        </tbody>
    </table>
</body>
</html>