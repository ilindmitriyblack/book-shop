<?php
require "inc/lib.inc.php";
require "inc/config.inc.php";

$id = $_GET['id'];
if($id){
    add2Basket($id);
}
header("Location: catalog.php");
exit;