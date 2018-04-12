<?php 
    //start session
    session_start();
    //load file config
    include "config.php";
    //load file model
    include "application/model.php";
    //load file controller
    include "application/controller.php";
    //lay bien controller truyen tren url
    $c = isset($_GET["controller"])?$_GET["controller"]:"";
    if($c !="")
        $controller = "controller/frontend/controller_$c.php";
    else
        $controller = "controller/frontend/controller_home.php";
    //load view_layout
    include "view/frontend/view_tim_kiem.php";
?>