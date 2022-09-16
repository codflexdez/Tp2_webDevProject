<?php

function user_model_list(){      
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

function user_model_login($request){
    
        require(CONNEX_DIR);
        foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
        
    }
    
        $sql = "SELECT * FROM utilisateur WHERE username = '$username'";
        
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
           
        $result = mysqli_fetch_assoc($result);
        
        $_SESSION['errorMsg'] = "";
        $_SESSION['userId']	 = $result['studentId'];
        $_SESSION['name'] = $username;
    
        header("Location: ?module=forum&action=index");
    
        
        }else {
            $_SESSION['errorMsg'] = "Vos informations sont incorrectes";
            header("Location: ?module=user&action=login");
            
        }
       
        mysqli_close($con);
    }
   


function user_model_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($con,$value);
    }
    
    $password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateur (name, email, username, password, dob) VALUES ('$name', '$email', '$username','$password','$dob')";
    
    mysqli_query($con, $sql);
    mysqli_close($con);
}


?>


