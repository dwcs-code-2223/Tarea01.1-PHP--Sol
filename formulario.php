<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados formulario</title>
    </head>
    <body>


        <?php
       
        echo "<h1>Estos son los datos recibidos de tu formulario:</h1><ol>";

        foreach ($_REQUEST as $clave => $valor) {

            echo "<li> <strong>$clave</strong>: ";

            if (!is_array($valor)) {

                echo " $valor</li>";
                
            } else {

                echo "" . var_dump($valor) . "</li>";
            }
        }
        echo"</ul> </body>"
        ?>