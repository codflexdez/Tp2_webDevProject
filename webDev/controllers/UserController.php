<?php
function user_controller_index(){
    require(MODEL_DIR.'/user.php');
    $data = user_model_list();
    render(VIEW_DIR.'/user/index.php', $data);
}


function user_controller_login(){
    require(MODEL_DIR.'/user.php');
    render(VIEW_DIR.'/user/login.php');
}

function user_controller_connect($request){
    require(MODEL_DIR.'/user.php');
    user_model_login($request);
}



function user_controller_logout(){
    require(MODEL_DIR.'/forum.php');
    forum_model_list();
    unset($_SESSION['name']);
    header("Location: ?module=forum&action=index");
   
}


function user_controller_create(){
    require(MODEL_DIR.'/user.php');    
    $data = user_model_list();
    render(VIEW_DIR.'/user/create.php', $data);
}

function user_controller_insert($request){ 
    require(MODEL_DIR.'/user.php');
    user_model_insert($request);
    
    header("Location: ?module=user&action=login");
}



?>

