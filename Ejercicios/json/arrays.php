<?php

$libros = [];

$libros[] = [
    "Nombre" => "Libro1",
    "Autor" => "Autor1",
    "Anio" => "1990",
    "NumeroPaginas" => 100,
    "ISBN" => 32156,
    "Capitulos" => [
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 50
    ]
];
$libros[] = [
    "Nombre" => "Libro2",
    "Autor" => "Autor2",
    "Anio" => "1991",
    "NumeroPaginas" => 200,
    "ISBN" => 32321,
    "Capitulos" => [
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 50,
        "Capitulo3" => "Cap3",
        "PagCap3" => 50,
        "Capitulo4" => "Cap4",
        "PagCap4" => 50
    ]
];
$libros[] = [
    "Nombre" => "Libro3",
    "Autor" => "Autor3",
    "Anio" => "1992",
    "NumeroPaginas" => 100,
    "ISBN" => 32321,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap5" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro4",
    "Autor" => "Autor4",
    "Anio" => "1993",
    "NumeroPaginas" => 140,
    "ISBN" => 33452,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap5" => 20,
        "Capitulo6" => "Cap6",
        "PagCap6" => 20,
        "Capitulo7" => "Cap7",
        "PagCap7" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro5",
    "Autor" => "Autor5",
    "Anio" => "1994",
    "NumeroPaginas" => 100,
    "ISBN" => 32458,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 40,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 10
    ]
    ];

$libros[] = [
    "Nombre" => "Libro6",
    "Autor" => "Autor6",
    "Anio" => "1995",
    "NumeroPaginas" => 200,
    "ISBN" => 32126,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap5" => 20,
        "Capitulo6" => "Cap6",
        "PagCap6" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro7",
    "Autor" => "Autor7",
    "Anio" => "1996",
    "NumeroPaginas" => 75,
    "ISBN" => 32659,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 25,
    ]
    ];

$libros[] =[
    "Nombre" => "Libro8",
    "Autor" => "Autor8",
    "Anio" => "1997",
    "NumeroPaginas" => 100,
    "ISBN" => 32457,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 25,
        "Capitulo2" => "Cap2",
        "PagCap2" => 25,
        "Capitulo3" => "Cap3",
        "PagCap3" => 25,
        "Capitulo4" => "Cap4",
        "PagCap4" => 25
    ]
    ];

$libros[] = [
    "Nombre" => "Libro9",
    "Autor" => "Autor9",
    "Anio" => "1998",
    "NumeroPaginas" => 100,
    "ISBN" => 32147,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 30,
        "Capitulo3" => "Cap3",
        "PagCap3" => 40
        
    ]
];

$libros[] = [
    "Nombre" => "Libro10",
    "Autor" => "Autor10",
    "Anio" => "1999",
    "NumeroPaginas" => 100,
    "ISBN" => 32359,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 25,
        "Capitulo4" => "Cap4",
        "PagCap4" => 25
    ]
    ];

echo json_encode($libros);
?>