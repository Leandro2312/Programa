<?php

$pasta = "img/";
echo "<pre>";
print_r($_FILES["arquivo"]);


exit();

move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . "teste.jpg");

?>