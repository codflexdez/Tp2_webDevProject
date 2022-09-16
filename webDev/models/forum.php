<?php
function forum_model_list(){
    
    require(CONNEX_DIR);
  
    $sql = "SELECT msgId, student_Id, title, article, date, name FROM forum INNER JOIN utilisateur on student_Id = studentId ORDER BY date";
   
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}



function forum_model_view($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
     
    }
    
    $sql = "SELECT * FROM forum WHERE msgId = '$id'";
    
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($con);
    return $result;
}



function forum_model_insert($request){

    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    $sql = "INSERT INTO forum (title, article, date, student_Id) VALUES ('$title','$article','$date', '$student_Id')";

    mysqli_query($con, $sql);
    mysqli_close($con);
}


function forum_model_edit($request){
    
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
       
        $$key=mysqli_real_escape_string($con,$value);
        
    }
    $sql = "UPDATE forum SET title = '$title', article = '$article', date = '$date', student_Id = '$student_Id' WHERE msgId = '$msgId'";
    
    mysqli_query($con, $sql);
    mysqli_close($con);
}




 function forum_model_delete($request){
    require(CONNEX_DIR);
     foreach($request as $key=>$value){         
        $$key=mysqli_real_escape_string($con,$value);
    }
     
    $sql = "DELETE FROM forum WHERE msgId = '$id'";
    
     mysqli_query($con, $sql);
     mysqli_close($con);
    }


?>

