<?php
$old_path = getcwd();

chdir(__DIR__)
$menu_output = shell_exec("./gcafe");
echo "<pre>$menu_output</pre>";

chdir($old_path);
