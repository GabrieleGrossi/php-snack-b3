<!-- Scrivi una funzione che fonde due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro
es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5]. -->

<?php
    $letters = ['a','b','c','d','e'];
    $numbers = [1,2,3,4,5];
    var_dump($letters, $numbers);
    $mixed=[];
    for($i=0; $i<count($letters); $i++){
        array_push($mixed, $letters[$i], $numbers[$i]);
    }
    var_dump($mixed);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <h1>
        Ciao
    </h1>
</body>
</html>