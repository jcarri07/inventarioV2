<?php
    // require_once "coneccion.php";
    // $coneccion = coneccion();
    $mysqli = new mysqli('localhost', 'root', '', 'mantenimiento');

    $id_odt = $_POST['id_odt'];

    
    $query2 = $mysqli -> query ("SELECT * FROM odt WHERE id_odt = '$id_odt' ORDER BY id_odt DESC LIMIT 1");
    $resultodt = mysqli_fetch_row($query2);
    $query2 ->close();

?>  

<img src="imagenes/CabeceraODT.jpg" style="width:100%; height:auto;" alt="">
<br>
<br>
<br>
<br>
<br>
   <h3 style="color:black; text-align: center"><b>ORDEN DE TRABAJO</b></h3>
<br>



<div class="container">
    <p style="text-align : right;">codigo nº : 000000<?=$resultodt[0]?></p>
    <br>
   <table border="1" style=" width:100%;">
    <!-- <caption>Titulo de la tabla</caption> -->
        <tr>
            <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Fecha de emision: </b><?=$resultodt[3]?></td>
            <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Fecha programada: </b><?=$resultodt[4]?></td>
        </tr>
    
    </table>
    <br>
    <br>
    <h4 style="color:black; text-align: center"><b>Datos del Equipo</b></h4>


    <?php

        $query2 = $mysqli -> query ("SELECT * FROM equipo WHERE Cod_equipo = '$resultodt[7]'");
        $resultequipo = mysqli_fetch_row($query2);
        $query2 ->close();

        $query2 = $mysqli -> query ("SELECT * FROM tipo_equipo WHERE Cod_Tipo_Eqp = '$resultequipo[4]'");
        $resulttipo = mysqli_fetch_row($query2);
        $query2 ->close();

    ?>  
    

    <table border="1" style=" width:100%;">
        <!-- <caption>Titulo de la tabla</caption> -->
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Tipo de Equipo: </b><?=$resulttipo[1]?></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Serial: </b><?=$resultequipo[1]?></td>
            </tr>
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Marca: </b><?=$resultequipo[2]?></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Modelo: </b><?=$resultequipo[3]?></td>
            </tr>
        
    </table>

    <br>
    <br>
    <h4 style="color:black; text-align: center"><b>Ubicacion del Equipo</b></h4>
    

    <?php
        $ubic = array("","","");
        $i=0;

        $query2 = $mysqli -> query ("SELECT u.nombre, du.nombre, ue.cod_equipo
        FROM ubicacion u, detalle_ubicacion du, ubicacion_equipo ue
        WHERE u.`Cod_ubicacion`LIKE du.`Cod_ubicacion` AND du.`Cod_detalle_ubic`LIKE ue.`Cod_detalle_ubic` AND ue.`Cod_equipo`LIKE'$resultodt[7]';");
        
        $filas = mysqli_num_rows($query2);

        
            while($valores = mysqli_fetch_row($query2)){
                $ubic[$i] = $valores[1];
                $i++;
            }
            $i=0;

            if($filas == 2){$ubic[2]="";}
            $query2 ->close();
    ?>  


    <table border="1" style=" width:100%;">
        <!-- <caption>Titulo de la tabla</caption> -->
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:32.6%;"><b>Edificación:  &nbsp; &nbsp;</b><?=$ubic[0]?></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:32.7%;"><b>Piso:  &nbsp; &nbsp;</b><?=$ubic[1]?></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:32.6%;"><b>Oficina:  &nbsp; &nbsp;</b><?=$ubic[2]?></td>
            </tr>
    </table>

    <br>
    <br>
    <h4 style="color:black; text-align: center"><b>Datos del Mantenimiento</b></h4> 

    <?php

    $query2 = $mysqli -> query ("SELECT * FROM tipo_mantenimiento WHERE id_tipo_man = '$resultodt[12]'");
    $resultmant = mysqli_fetch_row($query2);
    $query2 ->close();

    ?>  
    

    <table border="1" style=" width:100%;">
        <!-- <caption>Titulo de la tabla</caption> -->
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Tipo de mantenimiento: </b> <?=$resultmant[1]?></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%;"><b>Estado: </b>Pendiente</td>
            </tr>
            <tr>
                <td colspan="2" style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Descripcion:</b><br><?=$resultodt[1]?><br></td>
            </tr>
            <tr>
                <td colspan="2" style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Observaciones:</b><br><br><br></td>
            </tr>
        
    </table>

    <br>
    <br>
    <h4 style="color:black; text-align: center"><b>Realizado por</b></h4>

    <?php

    $query2 = $mysqli -> query ("SELECT * FROM departamento WHERE id_departamento = '$resultodt[11]'");
    $resultdep = mysqli_fetch_row($query2);
    $query2 ->close();

    ?>  
    

    <table border="1" style=" width:100%;">
        <!-- <caption>Titulo de la tabla</caption> -->
            <tr>
                <td colspan="2" style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Departamento: </b><?=$resultdep[1]?></td>
            </tr>
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>Tecnico</b></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>Supervisor</b></td>
            </tr>
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Cedula:</b><br>
                                                                                                    <br><b>Nombre:</b><br>
                                                                                                    <br><b>Apellido:</b></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px;"><b>Cedula:</b><br>
                                                                                                    <br><b>Nombre:</b><br>
                                                                                                    <br><b>Apellido:</b></td>
            </tr>
        
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <table border="0" style=" width:100%;">
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>__________________________</b></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>__________________________</b></td>
            </tr>
            <tr>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>Firma del tecnico</b></td>
                <td style="color:black; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; width:49%; text-align:center"><b>Firma del supervisor</b></td>
            </tr>
    </table>

    

</div>