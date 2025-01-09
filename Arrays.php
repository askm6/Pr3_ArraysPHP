<!DOCTYPE html>
<html>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    $array = ["nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona"];
    $count = 0;
    foreach ($array as $key => $value) {
        $count++;
        echo "dato " . $count . "º: " . $array[$key] . "<br>";
    }
    ?>
    <br>
    <h1>Ejercicio 2</h1>
    <?php
    foreach ($array as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    ?>
    <br>
    <h1>Ejercicio 3</h1>
    <?php
    $array["edad"] = 24;
    $count = 0;
    foreach ($array as $key => $value) {
        $count++;
        echo "dato " . $count . "º: " . $value . "<br>";
    }
    ?>
    <br>
    <h1>Ejercicio 4</h1>
    <?php
    unset($array["ciudad"]);
    var_dump($array);
    ?>
    <br>
    <h1>Ejercicio 5</h1>
    <?php
    $letters = "a,b,c,d,e,f";
    $letters = explode(",", $letters);
    for ($i = sizeof($letters); $i > 0; $i--) {
        echo "letter " . $i . "º: " . $letters[$i - 1] . "<br>";
    }
    ?>
    <br>
    <h1>Ejercicio 6</h1>
    <?php
    $notas = ["Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1];
    echo "Notas de los estudiantes: ";
    arsort($notas);
    foreach ($notas as $key => $value) {
        echo $key . ": " . $value . " ";
    }
    ?>
    <br>
    <h1>Ejercicio 7</h1>
    <?php
    $media = round(array_sum($notas) / count($notas), 2);
    echo "Media de las notas: " . $media . "<br>";
    echo "Alumnos con nota por encima de la media: <br>";
    foreach ($notas as $key => $value) {
        if ($value > $media) {
            echo $key . "<br>";
        }
    }
    ?>
    <br>
    <h1>Ejercicio 8</h1>
    <?php
    $mayorNota = 0;
    $mayorNombre;
    foreach ($notas as $key => $value) {
        if ($value > $mayorNota) {
            $mayorNota = $value;
            $mayorNombre = $key;
        }
    }
    echo "La nota más alta es " . $mayorNota . " y el mejor alumno es " . $mayorNombre;
    ?>
</body>

</html>