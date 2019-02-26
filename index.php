<?php 

require_once "router.php";



route('/admin', function() {
    $page = 'main';
    
    require "./view/admin/layout/head.php";
    require "./view/admin/index.php";
    require "./layout/sidebar.php";
    require "./layout/header.php";
    require "./layout/r_sidebar.php";
});



// ADMIN ROUTES




$action = $_SERVER['REQUEST_URI'];

dispatch($action);