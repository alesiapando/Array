<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro";
echo "<br>";
echo "<br>";
$numerospares = [2,4,6,8,10,12,14,16,18,20];
print ($numerospares [0]);
echo "<br>";
print ($numerospares [1]);
echo "<br>";
print ($numerospares [2]);
echo "<br>";
print ($numerospares [3]);
echo "<br>";
print ($numerospares [4]);
echo "<br>";
print ($numerospares [5]);
echo "<br>";
print ($numerospares [6]);
echo "<br>";
print ($numerospares [7]);
echo "<br>";
print ($numerospares [8]);
echo "<br>";
print ($numerospares [9]);
echo "<br>";
echo "<br>";

echo "Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r()";
echo "<br>";
echo "<br>";
$array2 = ["Pedro", "Ana", 34, 1];
print_r($array2);
echo "<br>";
echo "<br>";

echo "Crear un array asociativo";
echo "<br>";
echo "<br>";
$arrayasociativo = ['Nombre'=> 'Pedro',
'Apellido'=> 'Torres',
'Direccion'=> 'Av. Mayor 3703',
'Telefono'=> '1122334455'];
print ($arrayasociativo ['Nombre']);
echo "<br>";
print ($arrayasociativo ['Apellido']);
echo "<br>";
print ($arrayasociativo ['Direccion']);
echo "<br>";
print ($arrayasociativo ['Telefono']);
echo "<br>";
echo "<br>";
echo "Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.";
echo "<br>";
echo "<br>";
$array4 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
echo "La ciudad con el índice 0 tiene el nombre: ";
print ($array4 [0]);
echo "<br>";
echo "La ciudad con el índice 1 tiene el nombre: ";
print ($array4 [1]);
echo "<br>";
echo "La ciudad con el índice 2 tiene el nombre: ";
print ($array4 [2]);
echo "<br>";
echo "La ciudad con el índice 3 tiene el nombre: ";
print ($array4 [3]);
echo "<br>";
echo "La ciudad con el índice 4 tiene el nombre: ";
print ($array4 [4]);
echo "<br>";
echo "La ciudad con el índice 5 tiene el nombre: ";
print ($array4 [5]);
echo "<br>";
echo "<br>";
echo "Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD";
echo "<br>";
echo "<br>";
$array5 = ['Madrid'=> 'MD', 'Barcelona'=> 'BCL', 'Londres'=> 'LD', 'New York'=> 'NY', 'Los Ángeles'=> 'LA', 'Chicago'=> 'CCG'];
echo "El indice de Madrid es: ";
print ($array5 ['Madrid']);
echo "<br>";
echo "El indice de Barcelona es: ";
print ($array5 ['Barcelona']);
echo "<br>";
echo "El indice de Londres es: ";
print ($array5 ['Londres']);
echo "<br>";
echo "El indice de New York es: ";
print ($array5 ['New York']);
echo "<br>";
echo "El indice de Los Ángeles es: ";
print ($array5 ['Los Ángeles']);
echo "<br>";
echo "El indice de Chicago es: ";
print ($array5 ['Chicago']);
echo "<br>";
echo "<br>";

?>

    
</body>
</html>