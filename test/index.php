<?php
$nom = "Val";
$branche = "branche";
$numb = "10";



for ($i=0; $i < 10 ; $i++){

    echo $i;
}

$tab = ["val","nantes",27];
$tab2 = ["Vallll","Nantes"];


$tab3 = [
    "name" => "Val",
    "ville" => "Nantes",
    10 => "Number",
];

$articles = [
    1 => [
        "title" => "Titre 1",
        "description" => "Super description 1",
    ],
    2 => [
        "title" => "Titre 2",
        "description" => "Super description 2",
    ],
    3 => [
        "title" => "Titre 3",
        "description" => "Super description 3",
    ],
    4 => [
        "title" => "Titre 4",
        "description" => "Super description 4",
    ],
];


foreach ($articles as $article){
    echo "<pre>";
    echo $article["description"];
    echo "</pre>";
}


$_GET;
var_dump($_GET);
echo "<pre>";
echo "</pre>";
?>