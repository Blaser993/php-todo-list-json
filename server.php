<?php

$todo_string = file_get_contents("./todo.json");

header("Content-Type: application/json");

$todo_list = json_decode($todo_list,true);

$response = [
    "results" => [],
    "success" => true,
];

echo $todo_string;

echo json_encode($response);

?>