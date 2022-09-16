<?php
function forum_controller_index(){
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_list();
        render(VIEW_DIR.'/user/index.php', $data);
    }



function forum_controller_view($request){
    require(MODEL_DIR.'/forum.php');
    $data = forum_model_view($request);
    render(VIEW_DIR.'/user/view.php', $data);  
}



function forum_controller_create(){
    require(MODEL_DIR.'/forum.php');     
    $data = forum_model_list();
    render(VIEW_DIR.'/forum/newArticle.php', $data);

    
}


function forum_controller_insert($request){ 
    require(MODEL_DIR.'/forum.php');
    forum_model_insert($request);
    header("Location: ?module=forum&action=index");
}



function forum_controller_edit($request){ 
    require(MODEL_DIR.'/forum.php');
    forum_model_edit($request);
    header("Location: ?module=forum&action=index");  
}


function forum_controller_delete($request){
     require(MODEL_DIR.'/forum.php');
     forum_model_delete($request);
     header("Location: ?module=forum&action=index");
 }


?>

