<?php

require_once 'BLL.php';

//require_once 'error.php';

$command = $_REQUEST["command"];


switch ($command) {

    case "getCats":

        $cats = getCats();
        $json = json_encode($cats);
        echo $json;
        break;

    case "deleteRow":
        $id = $_REQUEST["id"];
        deleteRow($id);
        break;

}


