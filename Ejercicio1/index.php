<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/index.css">

    <!-------GOOGLE FONTS------------>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <!-------CSS BOOSTRAP------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Calculadora Predial Pro</title>
</head>
<body>
    <div class="container-fluid" id="cf2">
        <h3 id="titulo">Cálculo del impuesto predial</h3>
    </div>

    <div class="container-fluid" id="cf1">
        <!---------FORM 1-------------->
        <form action="reporte.php" method="POST">
        <div class="row">
            <div class="col">
                <h4>Información personal</h4>
            </div>
        </div>
        <div class="row my-2">

             <div class="col-md-6 col-sm-12">
                <label for="nombreTitular"><h5>Nombre del titular</h5></label>
                <input type="text" class="form-control" id="nombreTitular" name="nombreTitular"  required>
             </div>
             <div class="col-md-6 col-sm-12">
                <label for="apellidosTitular"><h5>Apellidos del titular</h5></label>
                <input type="text" class="form-control" id="apellidosTitular" name="apellidosTitular"  required>
             </div>
             <div class="col-md-4 col-sm-12 mt-2">
                <label for="edad"><h5>Edad</h5></label>
                <input type="number" class="form-control" id="edad" name="edad"  required>
             </div>
             <div class="col-md-4 col-sm-12 mt-2">
                <label for="cuentaCastral"><h5>Número de cuenta catastral</h5></label>
                <input type="text" class="form-control" id="cuentaCatastral" name="cuenta"  required>
             </div>
             <div class="col-md-4 col-sm-12 mt-2">
                <label for="selectTC"><h5>Pago con tarjeta de crédito</h5></label>
                <select class="custom-select" id="selectTC" name="selectTC" required>
                    <option selected disabled value="">Elija...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
             </div>
             <div class="col-md-6 col-sm-12 mt-2">
                <label for="domicilio"><h5>Domicilio del titular</h5></label>
                <input type="text" class="form-control" id="domicilio" name="domicilio"  required>
             </div>
             <div class="col-md-6 col-sm-12 mt-2">
                <label for="selectDel"><h5>Delegación</h5></label>
                <select class="custom-select" id="selectDel" name="selectDel" required>
                    <option selected disabled value="">Elija...</option>
                    <option value="obregon">Álvaro Obregón</option>
                    <option value="azca">Azcapotzalco</option>
                    <option value="juarez">Benito Juárez</option>
                    <option value="coyo">Coyoacan</option>
                    <option value="morelos">Cuajimalpa de Morelos</option>
                    <option value="cuahu">Cuahutemoc</option>
                    <option value="madero">Gustavo A. Madero</option>
                    <option value="iztac">Iztacalco</option>
                    <option value="iztap">Iztapalapa</option>
                    <option value="contreras">Magdalena Contreras</option>
                    <option value="hidalgo">Miguel Hidalgo </option>
                    <option value="milpa">Milpa Alta</option>
                    <option value="tlahuac">Tlahuac</option>
                    <option value="tlalpan">Tlalpan</option>
                    <option value="carranza">Venustiano Carranza</option>
                    <option value="xochimilco">Xochimilco</option>
                </select>
            </div>
         </div>

        <hr style="background-color:#ffffff" class="my-4">
        <div class="row">
            <div class="col">
                <h4>Información del Predio</h4>
            </div>
        </div>
         <div class="row my-2">

             <div class="col-md-6 col-sm-12">
                 <label for="areaP"><h5>Área del predio</h5></label>
                <input type="text" class="form-control" id="areaP" name="areaP"  required>
             </div>

             <div class="col">
                    <label for="selectTipo"><h5>Tipo de predio</h5></label>
                    <select class="custom-select" id="selectTipoP" name="selectTipoP" required>
                        <option selected disabled value="">Elija...</option>
                        <option value="urbano">Urbano</option>
                        <option value="rural">Rural</option>
                        <option value="rustico">Rústico</option>
                    </select>
                </div>
         </div>
         <div class="row my-3">
            <div class="col">
                <button type="submit" class="btn btn-dark" name="">Calcular Impuesto Predial y guardar registro en la bd</button>
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