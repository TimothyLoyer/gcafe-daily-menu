<?php
$old_path = getcwd();

chdir(__DIR__);
$menu_output = shell_exec("./gcafe");
echo $menu_output;

chdir($old_path);
