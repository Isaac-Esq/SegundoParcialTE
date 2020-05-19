<?php
    extract($_POST);

    $valorm2 = 0;
    $delegacion = "";

    switch($selectDel){
        case "obregon":
            $valorm2 = 1256.20;
            $delegacion ="Alvaro Obregon"; 
        break;
        case "azca":
            $valorm2 = 1300.52;
            $delegacion ="Azcapotzalco";
        break;
        case "juarez":
            $valorm2 = 1325.62;
            $delegacion ="Benito Juarez";
        break;
        case "coyo":
            $valorm2 = 1389.20;
            $delegacion ="Coyoacan";
        break;
        case "morelos":
            $valorm2 = 1325.25;
            $delegacion ="Cuajimalpa de Morelos";
        break;
        case "cuahu":
            $valorm2 = 1332.52;
            $delegacion ="Cuahutemoc";
        break;
        case "madero":
            $valorm2 = 1346.23;
            $delegacion ="Gustavo A. Madero";
        break;
        case "iztac":
            $valorm2 = 1358.25;
            $delegacion ="Iztacalco";
        break;
        case "iztap":
            $valorm2 = 1369.12;
            $delegacion ="Iztapalapa";
        break;
        case "contreras":
            $valorm2 = 1372.24;
            $delegacion ="Magdalena Contreras";
        break;
        case "hidalgo":
            $valorm2 = 1389.48;
            $delegacion ="Miguel Hidalgo";
        break;
        case "milpa":
            $valorm2 = 1410.15;
            $delegacion ="Milpa Alta";
        break;
        case "tlahuac":
            $valorm2 = 1419.99;
            $delegacion ="Tlahuac";
        break;
        case "tlalpan":
            $valorm2 = 1423.25;
            $delegacion ="Tlalpan";
        break;
        case "carranza":
            $valorm2 = 1445.78;
            $delegacion ="Venustiano Carranza";
        break;
        case "xoc":
            $valorm2 = 1476.85;
            $delegacion ="Xochimilco";
        break;
    }
    $valorCatastral = (($areaP * $valorm2));

    $factor = 0;

    switch($selectTipoP){
        case "urbano":
            $factor = 0.015;
        break;
        case "rural":
            $factor = 0.008;
        break;
        case "rustico":
            $factor = 0.005;
        break;
    }

    $impuesto = (($factor*$valorCatastral));

    $impuestoAjustado = max(200, $impuesto);

    if($edad>=60){
        $descEdad = "Sí";
        $impuestoDescEdad = (($impuestoAjustado*.5));
    }
    else{
        $descEdad = "No";
        $impuestoDescEdad = $impuesto;
    }

    if($selectTC == "si"){
        $descTarjeta = "Sí";
        $impuestoFinal = (($impuestoDescEdad * .85));
    }
    else{
        $descTarjeta = "No";
        $impuestoFinal = $impuestoDescEdad;
    }


    //////////////////////////////////////////
    // CONEXION DB
    //////////////////////////////////////////

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ExamenParcial2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO ejercicio1 (nombre, apellidos, edad,numCuenta,domicilio,delegacion,metros2,tipoPredio,impuestoTotal)
        VALUES ('$nombreTitular', '$apellidosTitular', '$edad', '$cuenta', '$domicilio', '$delegacion', '$areaP', '$selectTipoP', '$impuestoFinal')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/reporte.css">

    <!-------GOOGLE FONTS------------>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <!-------CSS BOOSTRAP------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Calculadora Predial Pro</title>
</head>
<body>


    <div class="container-fluid" id="cf1">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Titular</th>
              <th scope="col">Edad</th>
              <th scope="col">Numero de cuenta catastral</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $nombreTitular." ".$apellidosTitular;?></td>
              <td><?php echo $edad;?></td>
              <td><?php echo $cuenta;?></td>
            </tr>
          </tbody>
          <thead class="thead-dark">
              <th scope="col">Domicilio</th>
              <th scope="col">Delegacion</th>
              <th scope="col">Tipo de predio</th>
          </thead>
          <tbody>
              <td><?php echo $domicilio;?></td>
              <td><?php echo $delegacion;?></td>
              <td><?php echo $selectTipoP;?></td>
          </tbody>
        </table>
        <div class="row">
            <div class="col">
                <p>
                  <a class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="btn1">
                    Informacion del calculo
                  </a>
                </p>
                <div class="collapse" id="collapseExample">

                  <div class="card card-body" id="cbody">
                   <ul>
                       <li><?php echo "Valor catastral = area del Predio * valor m2 de la delegación = ".$areaP. " * ".$valorm2." = ".$valorCatastral; ?>
                       </li>
                       <li>
                           <?php echo "Impuesto = valor catastral * factor del tipo de Predio = ".$valorCatastral. " * ".$factor." = ".$impuesto; ?>
                       </li>
                   </ul>

                  </div>
                </div>
            </div>
            <div class="col">
                <p>
                  <a class="btn" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" id="btn1">
                    Descuentos
                  </a>
                </p>
                <div class="collapse" id="collapseExample2">

                  <div class="card card-body" id="cbody">
                   <ul>
                       <li> <?php echo "Descuento por tercera edad: ".$descEdad; ?>
                       </li>
                       <li>
                           <?php echo "Descuento por pago con tarjeta: ".$descTarjeta; ?>
                       </li>
                   </ul>

                  </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col" style="text-align:center; color:white;">
                <h4><?php echo "Impuesto Ajustado: *". $impuestoAjustado?></h4>
            </div>
        </div>
        
        

        <div class="row my-2" id="rowR" >
            <div class="col">
                <h3>Impuesto predial</h3>
                <div id="result" name="resultado"><h4><?php echo $impuestoFinal; ?></h4></div>
            </div>
        </div>

        <div class="row my-2">
            <div class="col">
                <form action="index.php">
                    <button type="submit" class="btn" id="btn2" name="">Registrar otro pago</button>                
                </form>
            </div>
         </div>

    </div>




    <!-------JS BOOSTRAP------------>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="script/script.js" type="text/javascript"></script>
</body>
</html>
