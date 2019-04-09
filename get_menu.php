<?php

chdir(__DIR__);
$hostname = getenv("APP_URL");
$menu = shell_exec("./gcafe");

$menu = explode($menu, "\n");
$menu = $debug = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $menu);

$menu = explode("\n", $menu);
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
