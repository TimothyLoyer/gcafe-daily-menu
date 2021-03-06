<?php

chdir(__DIR__);
$hostname = getenv("APP_URL");
$menu = shell_exec("./gcafe");

$menu = array_filter(explode("\n", $menu));

$title = array_shift($menu);
$link = array_pop($menu);
$menu = implode("\n", $menu);

$data = [
	"response_type" => "in_channel",
	"text" => $title,
	"attachments" => [[
		"text" => $menu,
		"footer" => $link,
		"footer_icon" => "{$hostname}/gcafe.png",
	]],
];

header("Content-Type: application/json;charset=utf-8");
echo json_encode($data);
