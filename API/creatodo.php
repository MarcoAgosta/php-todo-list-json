<?php
$todo = file_get_contents("../todo.json");

$todo = json_decode($todo, true);

$nuovoImpegno = [
    "impegno" => $_POST["nuovoImpegno"],
  ];

$todo[]=$nuovoImpegno;

$todoJson = json_encode($todo, JSON_PRETTY_PRINT);

file_put_contents("../todo.json", $todoJson);

header("Content-Type: application/json");

echo json_encode($nuovoImpegno);

?>