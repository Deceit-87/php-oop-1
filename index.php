<?php

require_once __DIR__ . '/./movie.php';


$batman = new Movie('Batman the return','Batman the return','Azione',8);
// $batman->title = 'Batman the return';
// $batman->genre = 'Azione';
// $batman->vote = 8;
$forrest_gump = new Movie('Forrest Gump','Il Sergente Dan fa Breackdance','Drama',12);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> 

<div style="padding: 10px;">
   <?= $batman->movieOverview() ?>
</div>
<div style="padding: 10px;">
<?= $forrest_gump->movieOverview() ?>

</div>
<div>
   
</div>
</body>

</html> 