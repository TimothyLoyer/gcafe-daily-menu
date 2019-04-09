<?php

chdir(__DIR__);
$menu_output = shell_exec("./gcafe");

$data = [
	"response_type" => "in_channel",
	"text" => $menu_output,
];

header("Content-Type: application/json;charset=utf-8");
echo json_encode($data);
