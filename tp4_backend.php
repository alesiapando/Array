<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print "<pre>\n";
echo "·Ejercicio 1: Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro";
print "<pre>\n";
print "<pre>\n";
$numerospares = [2,4,6,8,10,12,14,16,18,20];
print ($numerospares [0]);
print "<pre>\n";
print ($numerospares [1]);
print "<pre>\n";
print ($numerospares [2]);
print "<pre>\n";
print ($numerospares [3]);
print "<pre>\n";
print ($numerospares [4]);
print "<pre>\n";
print ($numerospares [5]);
print "<pre>\n";
print ($numerospares [6]);
print "<pre>\n";
print ($numerospares [7]);
print "<pre>\n";
print ($numerospares [8]);
print "<pre>\n";
print ($numerospares [9]);
print "<pre>\n";
print "<pre>\n";

echo "·Ejercicio: 2 -Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r()";
print "<pre>\n";
print "<pre>\n";
$array2 = ["Pedro", "Ana", 34, 1];
print_r ($array2);
print "<pre>\n";
print "<pre>\n";

echo "·Ejercicio: 3 - Crear un array asociativo";
print "<pre>\n";
print "<pre>\n";
$arrayasociativo = ['Nombre'=> 'Pedro',
'Apellido'=> 'Torres',
'Direccion'=> 'Av. Mayor 3703',
'Telefono'=> '1122334455'];
print ($arrayasociativo ['Nombre']);
print "<pre>\n";
print ($arrayasociativo ['Apellido']);
print "<pre>\n";
print ($arrayasociativo ['Direccion']);
print "<pre>\n";
print ($arrayasociativo ['Telefono']);
print "<pre>\n";
print "<pre>\n";
print "<pre>\n";
echo " ·Ejercicio: 4 - Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.";
print "<pre>\n";
print "<pre>\n";
$ciudadespunto4 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach ($ciudadespunto4 as $i => $c){ 
    print "<pre>\n";
    print ("La ciudad con el índice: $i tiene el nombre: $c") ;
    print "<pre>\n";
}
print "<pre>\n";
print "<pre>\n";
print "<pre>\n";
echo " ·Ejercicio: 5 - Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD";
print "<pre>\n";
print "<pre>\n";
$array5 = ['Madrid'=> 'MD', 'Barcelona'=> 'BCL', 'Londres'=> 'LD', 'New York'=> 'NY', 'Los Ángeles'=> 'LA', 'Chicago'=> 'CCG'];
echo "El indice de Madrid es: ";
print ($array5 ['Madrid']);
print "<pre>\n";
echo "El indice de Barcelona es: ";
print ($array5 ['Barcelona']);
print "<pre>\n";
echo "El indice de Londres es: ";
print ($array5 ['Londres']);
print "<pre>\n";
echo "El indice de New York es: ";
print ($array5 ['New York']);
print "<pre>\n";
echo "El indice de Los Ángeles es: ";
print ($array5 ['Los Ángeles']);
print "<pre>\n";
echo "El indice de Chicago es: ";
print ($array5 ['Chicago']);
print "<pre>\n";
print "<pre>\n";

?>

    
</body>
</html>
