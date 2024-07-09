<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mostrar.css">
    <title>Lista de Películas</title>
</head>
<body>

<div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Director</th>
                    <th>Sinopsis</th>
                    <th>Accion</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $inc = include("bd.php");
                if ($inc) {
                    $consulta = "SELECT * FROM film2";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {

                            $id = $row['id'];
                            $titulo = $row['titulo'];
                            $genero = $row['genero'];
                            $director = $row['director'];
                            $sinopsis = $row['sinopsis'];
                ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $titulo; ?></td>
                                <td><?php echo $genero; ?></td>
                                <td><?php echo $director; ?></td>
                                <td><?php echo $sinopsis; ?></td>

                                <form action="eliminar.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <td> 
                                    
                                
                                    <!------ editar ------->
                        <a href="editar.php?id=<?php echo $row["id"] ?>" class="btnEdi">editar</a>

                                    <!------ eliminar ----->
                        <a href="eliminar.php?id=<?php echo $row["id"]?>" class="btnEli">eliminar</a>

                                </td>

                                </form>    

                                

                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    
</body>
</html>