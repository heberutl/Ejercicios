<?php
// Definir un array de libros
$libros = array(
    array("Título" => "Libro 1", "Autor" => "Autor 1", "Año" => 2020),
    array("Título" => "Libro 2", "Autor" => "Autor 2", "Año" => 2019),
    array("Título" => "Libro 3", "Autor" => "Autor 3", "Año" => 2021),
    // Puedes agregar más libros según sea necesario
);

// Imprimir la lista de libros
echo "<h2>Lista de Libros</h2>";
echo "<ul>";

foreach ($libros as $libro) {
    echo "<li>";
    echo "<strong>Título:</strong> " . $libro['Título'] . "<br>";
    echo "<strong>Autor:</strong> " . $libro['Autor'] . "<br>";
    echo "<strong>Año:</strong> " . $libro['Año'] . "<br>";
    echo "</li>";
}

echo "</ul>";
?>
