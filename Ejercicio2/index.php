<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/index.css">
    
    <!-------GOOGLE FONTS------------>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <!-------CSS BOOSTRAP------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Creador de Reportes Pro</title>
</head>
<body>
   <div class="container-fluid my-2" id="cf1">
      
       <div class="row">
           <div class="col">
               <h3>Reporte de Calificaciones</h3>
           </div>
       </div>
   </div>
    <div class="container-fluid my-5" id="cf2">
       <form action="reporte.php" method="post">
           <div class="row" id="rowMain">
            <div class="col-md-6 col-sm-12" id="col1">
                 <div class="row">
                     <div class="col">
                         <img src="img/fondo1.jpg" alt="">
                     </div>
                 </div>
            </div>
            <div class="col-md-6 col-sm-12" id="col2">
                 <div class="row">
                     <div class="col-md-12">
                        <label for="name">Nombre</label>
                         <input class="form-control" type="text" id="name" name="" required>                         
                     </div>
                     <div class="col-md-12">
                        <label for="ap">Apellido</label>
                         <input class="form-control" type="text" id="ap" name="" required>  
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <label for="grade">Grado</label>
                         <input class="form-control" type="text" id="grade" name="" required>                         
                     </div>
                     <div class="col">
                        <label for="group">Grupo</label>
                         <input class="form-control" type="text" id="group" maxlength="1" name="" required>  
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <label for="grade1">Califiacion 1</label>
                         <input id="grade1" class="form-control" type="number" min="0" max="10" step="0.01" name="" required>                         
                     </div>
                     <div class="col">
                        <label for="grade2">Califiacion 2</label>
                         <input id="grade2" class="form-control" type="number" min="0" max="10" step="0.01" name="" required>  
                     </div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <label for="grade3">Califiacion 3</label>
                         <input id="grade3" class="form-control" type="number" min="0" max="10" step="0.01" name="" required>                         
                     </div>
                     <div class="col">
                        <label for="grade4">Califiacion 4</label>
                         <input id="grade4" class="form-control" type="number" min="0" max="10" step="0.01" name="" required>  
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <label for="grade5">Califiacion 5</label>
                         <input id="grade5" class="form-control" type="number" min="0" max="10" step="0.01" name="" required>                         
                     </div> 
                 </div>
                 <div class="row my-4">
                     <div class="col">
                         <button type="submit" class="btn btn-success">Generar</button>
                     </div>
                 </div>
            </div>
        </div>
       </form>
        
    </div>

    
        

    <!-------JS BOOSTRAP------------>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>