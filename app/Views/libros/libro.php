<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">
    <!--ICONOS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Libros</title>
</head>
<body>
    
<div class="container">
        <h1>Libros</h1>
        <a href="<?=base_url('ver_formulario_nuevo_empleado')?>">
        <span class="material-icons">person_add</span>
        </a>
        <table>
            <thead>
                <tr class="encabezado_tabla">
                    <th>Codigo_libro</th>
                    <th>Codigo_autor</th>
                    <th>Codigo_editorial</th>
                    <th>Titulo</th>
                    <th>Número_páginas</th>
                    <th>Tamanio</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Edición</th>
                    <th>Acciónes</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                     $no_fila = 0;

                     foreach ($Libros as $datos):
                         $no_fila = $no_fila + 1;
                             if ($no_fila % 2 == 0){
                                 echo "<tr class='fila_par'>";
                             }else{
                                 echo "<tr class='fila_impar'>";
                             }
                ?>
               <!-- <tr>-->
                    <td><?= $datos['codigo_libro'];?></td>
                    <td><?= $datos['codigo_autor']; ?></td>
                    <td><?= $datos['codigo_editorial']; ?></td>
                    <td><?= $datos['titulo']; ?></td>
                    <td><?= $datos['numero_paginas']; ?></td>
                    <td><?= $datos['tamanio']; ?></td>
                    <td><?= $datos['precio']; ?></td>
                    <td><?= $datos['estado']; ?></td>
                    <td><?= $datos['edicion']; ?></td>
                    <td>
                    <a href="">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                    </td>
                    
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>