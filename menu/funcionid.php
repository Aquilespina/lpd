<!DOCTYPE html>
<html lang="en">
<head>
 <title>Buscar por id</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
 
    <link rel="script" href="script.js">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados de LPD</title>
</head>
<body>
    <div class="contaider">
        <form action="id.php" method="POST">
        <h2>Buscar por id</h2>
            <input type="text" name="Id_jovenes" placeholder="id">
            <button onclick="buscarid()">Buscar</button>
    </div>
    
</body>
</html>