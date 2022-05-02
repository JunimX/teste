<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.css")>
    <head>

        <title>carro</title>
    </head>

   <body>

    <div class="car">
       <h1>Carro</h1>
       <table class="table">
        <tr>
            <th>id</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Modelo</th>
            <th>rast- serial</th>
            <th>rast-modelo</th>
            <th>rast-marca</th>
        
        </tr>
        <?php foreach ($carro as $carro) : ?>

        <tr>
            <td><?= $carro['id_carro'] ?></td>
            <td><?= $carro['placa'] ?></td> 
            <td><?= $carro['ano'] ?></td> 
            <td><?= $carro['cor'] ?></td> 
            <td><?= $carro['modelo'] ?></td> 
            <td><?= $carro['rast_serial'] ?></td>
            <td><?= $carro['rast_modelo'] ?></td>
            <td><?= $carro['rast_marca'] ?></td>
           
             
        </tr>
        <?php endforeach ?>
      
       




    
    
    </body>
</html>