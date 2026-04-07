<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Table de multiplication</title>
    <style>
        body {
            max-width: 400px;
            margin: 40px auto;
            padding: 0 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 45px;
            border-radius: 8px;
            margin-bottom: 20px;
            
        }

        form label {
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            margin-left: 2px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            background-color: #355ad3;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
        }

        form button:hover {
            background-color: #2a47a8;
        }
        table {
        	border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: #355ad3;
            color: #fff;
            padding: 8px 12px;
            text-align: left;
        }

        td {
            padding: 8px 12px;
            border-bottom: 1px solid #ddd;
        }

        tr.fila-senar  { background-color: #ffffff; }
        tr.fila-parell { background-color: #f2f2f2; }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
    </head>
<body>
<form method="post" action="">
    <label>Introdueix un número (1-12):</label><br>
    <input type="number" name="numero" min="1" max="12" required>
    <button type="submit">Generar</button>
</form>


<table>
<?php

if (isset($_POST['numero'])) {

    $numero = (int) $_POST['numero'];

    if ($numero < 1 || $numero > 12 ) {
        echo "<p class='error'>Error: Torna-ho a provar amb números entre 1 i 12</p>";
    }
    else {
        echo "<h1>Taula del $numero</h1>";
        echo "<table>";
        echo "<tr><th>Operació</th><th>Resultat</th></tr>";

        for ($i = 1; $i <=10; $i++) {
            $resultat = $numero * $i ;
            if ($i % 2 === 0) {
                $class = "fila-parell";
            }
            else {
                $class = "fila-senar";
            }
            echo "<tr class='$class'>";
            echo "	<td>$numero * $i</td>";
            echo "	<td>$resultat</td>";
            echo "</tr>";
        }
        echo"</table>";
    }
}
?>
   
</body>
</html>