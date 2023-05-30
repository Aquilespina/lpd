<!DOCTYPE html>
<html>
<head>
    <title>Mostrar datos al hacer clic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Mostrar datos al hacer clic</h1>
    <button id="btnMostrar">Mostrar datos</button>
    <div id="tablaDatos"></div>

    <script>
        $(document).ready(function() {
            $("#btnMostrar").click(function() {
                $.ajax({
                    url: "../menu/mostrardatos.php", // Archivo PHP que obtiene los datos de la tabla
                    type: "GET",
                    success: function(response) {
                        $("#tablaDatos").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>

