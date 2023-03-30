<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include './header.php';
    ?>
    <h1>Mi primera clase PHP</h1>
    <?php
        // echo "<h1>Hola mundo</h1>";

        // print_r(["<h1>Hola mundo</h1>"]);

        // var_dump(["<h1>Hola mundo</h1>"]);  
        echo "hola";
    ?>

    <h1>Esto es otro script PHP</h1>

    <?php
        echo "<h2>script 2</h2>";
    ?>

    <?php

        $menu = [
            [
                "titulo" => "Ensalada",
                "nºcomensales" => 4,
                "tipo" => "entrante",
                "precio" => 3.5
            ],
            [
                "titulo" => "Paella",
                "nºcomensales" => 8,
                "tipo" => "principal",
                "precio" => 64
            ],
            [
                "titulo" => "Brownie",
                "nºcomensales" => 12,
                "tipo" => "postre",
                "precio" => 15
            ],
            [
                "titulo" => "Mojito",
                "nºcomensales" => 4,
                "tipo" => "cocktel",
                "precio" => 20
            ]
        ];

        echo "<ol>";
        foreach($menu as $platos){
            echo "<li>";
            foreach($platos as $descripcion => $valor){
                
                echo "<p>{$descripcion} => {$valor}</p>";
                
            };
            echo "</li>";
        };
        echo "</ol>";
        
    ?>
    <?php
        include './footer.php';
    ?>

</body>
</html>