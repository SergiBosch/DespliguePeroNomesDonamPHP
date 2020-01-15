<html>
    <head></head>
    <body>
        <form action="comprobarDatos.php" method="post" enctype="multipart/form-data">
            <table style="padding: 5px; margin: auto">
                <tr >
                    <td style="padding: 5px">
                        Nombre:
                    </td>
                    <td style="padding: 5px">
                        <input type="text" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        Apellidos:
                    </td>
                    <td style="padding: 5px">
                        <input type="text" name="apellidos">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        Correo:
                    </td>
                    <td style="padding: 5px">
                        <input type="text" name="correo">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        Contraseña:
                    </td>
                    <td style="padding: 5px">
                        <input type="password" name="contrasenya">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        ¿Que te parece este tutorial?
                    </td>
                    <td style="padding: 5px">
                        <input type="radio" name="radio" value="excelente">Excelente
                        <input type="radio" name="radio" value="masmenos">Mas o Menos
                        <input type="radio" name="radio" value="pesimo">Pésimo
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px"> 
                        ¿De estas secciones <br> cuales te gustaron mas?
                    </td>
                    <td style="padding: 5px">
                        <input type="checkbox" name="seccion1" value="si">Seccion 1<br>
                        <input type="checkbox" name="seccion2" value="si">Seccion 2<br>
                        <input type="checkbox" name="seccion3" value="si">Seccion 3
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        Continentes:
                    </td>
                    <td style="padding: 5px">
                        <select name="select">
                            <option value="value1">Value 1</option> 
                            <option value="value2">Value 2</option>
                            <option value="value3">Value 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        Adjuntar ficheros
                    </td>
                    <td style="padding: 5px">
                        <input type="file" name="fichero1"><br>
                        <input type="file" name="fichero2"><br>
                        <input type="file" name="fichero3">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px">
                        <input  type="submit">
                    </td>
                </tr>
            </table>
            
        </form>
    </body>
</html>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

