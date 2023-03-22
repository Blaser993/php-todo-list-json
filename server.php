<?php

$todo_list = file_get_contents("./todo.json");

header("Content-Type: application/json");

$todo_list = json_decode($todo_list,true);

$response = [
    "results" => $todo_list,
    "success" => true,
];

echo json_encode($todo_list);

//  echo json_encode($response);

?>