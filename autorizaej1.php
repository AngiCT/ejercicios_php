<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["envio"])) {
            if (!empty($_GET["titulo"])) {
                $Titulo = $_GET["titulo"];
                echo "<br>Titulo introducido: " . $Titulo;
            } else {
                echo "<br><h3>No has introducido ningun título.</h3>";
            }
        }
        if (isset($_GET["envio"])) {
            if (!empty($_GET["autor"])) {
                $autor = $_GET["autor"];
                echo "<br>Autor introducido: " . $autor;
            } else {
                echo "<br><h3>No has introducido ningun autor.</h3>";
            }
        }
        if (isset($_GET["envio"])) {
            if (!empty($_GET["editorial"])) {
                $editorial = $_GET["editorial"];
                echo "<br>Editorial introducido: " . $editorial;
            } else {
                echo "<br><h3>No has introducido ninguna editorial.</h3>";
            }
        }
        if (isset($_GET["envio"])) {
            if (!empty($_GET["paginas"])) {
                $paginas = $_GET["paginas"];
                echo "<br>Paginas introducidas: " . $paginas;
            } else {
                echo "<br><h3>No has introducido ninguna página.</h3>";
            }
        }
    ?>
</body>
</html>