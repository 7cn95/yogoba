<?php
	echo ($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    if($_SERVER['REQUEST_URI']=="/php/yogoba/"){
        include_once "./src/views/home.html";
    }
?>
