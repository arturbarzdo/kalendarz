<?php

include "class/data.php";

$data = new Dbdata();
$data-> show_mount();
echo '<pre>';
print_r($data);	
echo '</pre>';

