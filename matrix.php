<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$matrix = [
    [1,6,3],
    [14,3,4],
    [12,39,5],
    [20,2,6]
];
$max = $matrix[0][0];
for($i=0;$i<count($matrix);$i++) {
    for($j=0;$j<count($matrix);$j++) {
        if($matrix[$i][$j]>$max){
            $max = $matrix[$i][$j];
        }
    }
}
echo $max;
?>
</body>
</html>