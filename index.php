<?php
    $contenido = file_get_contents("./db/visitas.json");
    $visitas = json_decode($contenido,TRUE);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reporteador-ejercicio-8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
    <?php include ("./components/navbar.php");?>
    <br>
    <link rel="stylesheet" href="./css/styles.css">

    <div class="d-flex full-height">
        <div class="m-auto card">
            <div class="table table-responsive" id="table_filter2" name="table_filter2">
                <table class="table table-primary">
                    <thead class="">
                        <tr class="info-custom">
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Visitantes nacionales
                                </div>
                            </th>
                            <th>
                                <div class="badge text-wrap" style="width: augo;">
                                    Visitantes extranjeros
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Primera lengua más hablada
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Segunda lengua más hablada
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="info-custom info-custom resume-text">
                        <?php
                            $nacional_cont = 0;
                            $extranjero_cont = 0;
                            for($i = 0; $i < count($visitas); $i++){
                                if($visitas[$i]["NACIONALID"] == "1"){
                                    $nacional_cont += 1;
                                }else{
                                    $extranjero_cont+= 1;
                                }
                            }
                            $visitas1 = [
                                ["LENGUA_1" => 1],
                                ["LENGUA_1" => 2],
                                ["LENGUA_1" => 1],
                                ["LENGUA_1" => 3],
                                ["LENGUA_1" => 1],
                                ["LENGUA_1" => 2],
                            ];
                            $conteo_lengua = array_fill(1, 9, 0);
                            foreach ($visitas1 as $visita) {
                                $lengua = $visita["LENGUA_1"];
                                if (isset($conteo_lengua[$lengua])) {
                                    $conteo_lengua[$lengua] += 1;
                                }
                            }
                            $lengua_mas_repetida = null;
                            $max_conteo = 0;

                            foreach ($conteo_lengua as $lengua => $conteo) {
                                if ($conteo > $max_conteo) {
                                    $max_conteo = $conteo;
                                    $lengua_mas_repetida = $lengua;
                                }
                            }
                            
                            $visitas2 = [
                                ["LENGUA_2" => 1],
                                ["LENGUA_2" => 2],
                                ["LENGUA_2" => 1],
                                ["LENGUA_2" => 3],
                                ["LENGUA_2" => 1],
                                ["LENGUA_2" => 2],
                            ];

                            $conteo_lengua2 = array_fill(1, 9, 0);

                            foreach ($visitas as $visita2) {
                                $lengua2 = $visita2["LENGUA_2"];
                                if (isset($conteo_lengua2[$lengua2])) {
                                    $conteo_lengua2[$lengua2] += 1;
                                }
                            }

                            $lengua_mas_repetida2 = null;
                            $max_conteo2 = 0;

                            foreach ($conteo_lengua2 as $lengua2 => $conteo2) {
                                if ($conteo2 > $max_conteo2) {
                                    $max_conteo2 = $conteo2;
                                    $lengua_mas_repetida2 = $lengua2;
                                }
                            }

                            echo "<tr>";
                            echo "<td>".$nacional_cont."</td>";
                            echo "<td>".$extranjero_cont."</td>";
                            echo "<td>".$lengua_mas_repetida."</td>";
                            echo "<td>".$lengua_mas_repetida2."</td>";
                            echo "</tr>";                        
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table table-responsive hidden" id="table_filter1" name="table_filter1">
                <table class="table">
                    <thead class="table-primary">
                        <tr class="info-custom">
                            <th>
                                <div class="badge text-wrap" style="width: auto;">
                                    Acompañar a alguien
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Cultura general
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Aprender
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Motivos escolares
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Motivos laborales
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Conocer la exposición
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Entretenimiento
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Conocer la arquitectura
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Talleres
                                </div>
                            </th>
                            <th>
                                <div class="badge  text-wrap" style="width: auto;">
                                    Otro
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="info-custom info-custom resume-text">
                        <?php
                            $acomp_cont = 0;
                            $cult_cont = 0;
                            $aprend_cont = 0;
                            $escolar_cont = 0;
                            $laboral_cont = 0;
                            $conocer_cont = 0;
                            $entrete_cont = 0;
                            $edifici_cont = 0;
                            $taller_cont = 0;
                            $otro_cont = 0;

                            for($i = 0; $i < count($visitas); $i ++){
                                if ($visitas[$i]["MV_ACOMP"] == "1") {
                                    $acomp_cont++;
                                }
                                else if( $visitas[$i]["MV_CULTURA"] == "1") {
                                    $cult_cont++;
                                }
                                else if( $visitas[$i]["MV_APREND"]){
                                    $aprend_cont++;
                                }
                                else if( $visitas[$i]["MV_ESCOLAR"]){
                                    $escolar_cont++;
                                }
                                else if( $visitas[$i]["MV_LABORAL"]){
                                    $laboral_cont++;
                                }
                                else if( $visitas[$i]["MV_CONOCER"]){
                                    $conocer_cont++;
                                }
                                else if( $visitas[$i]["MV_ENTRETE"]){
                                    $entrete_cont++;
                                }
                                else if( $visitas[$i]["MV_EDIFICI"]){
                                    $edifici_cont++;
                                }
                                else if( $visitas[$i]["MV_TALLER"]){
                                    $taller_cont++;
                                }
                                else if( $visitas[$i]["MV_OTRO"]){
                                    $otro_cont++;
                                }
                            }
                            echo "<tr>";
                            echo "<td>".$acomp_cont."</td>";
                            echo "<td>".$cult_cont."</td>";
                            echo "<td>".$aprend_cont."</td>";
                            echo "<td>".$escolar_cont."</td>";
                            echo "<td>".$laboral_cont."</td>";
                            echo "<td>".$conocer_cont."</td>";
                            echo "<td>".$entrete_cont."</td>";
                            echo "<td>".$edifici_cont."</td>";
                            echo "<td>".$taller_cont."</td>";
                            echo "<td>".$otro_cont."</td>";
                            echo "</tr>";
                            
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="table-responsive table-container">
                <table class="table table-striped table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th>
                                <div class="head_text">
                                    #
                                </di>
                            </th>
                            <th>
                                <div class="head_text">
                                    Edad
                                </di>
                            </th>
                            <th>
                                <div class="head_text">
                                    Evaluación de la visita
                                </di>
                            </th>
                            <th>
                                <div class="head_text">
                                    Frecuencia de visitas en un año
                                </di>
                            </th>
                            <th>
                                <div class="head_text">
                                    Tipo de entrada
                                </di>
                            </th>
                            <th>
                                <div class="head_text">
                                    Duración de la visita (minutos)
                                </di>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="info-custom">
                        <?php
                            for ($i = 0; $i < count($visitas); $i++) {
                                $real_cont = $i+1;
                                echo "<tr>";
                                echo "<td>".$real_cont."</td>";
                                echo "<td>".$visitas[$i]["EDAD"]."</td>";
                                echo "<td>".$visitas[$i]["EVAL_GRAL"]."</td>";
                                if($visitas[$i]["VISIT_ANIO"] == ""){
                                    echo "<td>"."00"."</td>";
                                }else{
                                    echo "<td>".$visitas[$i]["VISIT_ANIO"]."</td>";

                                }
                                echo "<td>".$visitas[$i]["TIPO_ENTRA"]."</td>";
                                echo "<td>".$visitas[$i]["DUR_VIS_M"]."</td>";
                                echo "</tr>";    
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>     
    <script src="./js/navbar-filter.js"></script>         
  </body>
</html>