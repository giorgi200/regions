<?php 

require_once "router.php";



route('', function() {
    require "./view/layout/app.php";
});



// ADMIN ROUTES




$action = $_SERVER['REQUEST_URI'];

dispatch($action);