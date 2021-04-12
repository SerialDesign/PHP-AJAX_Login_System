<?php

// Force the user to be logged in or redirect
function forceLogin(){
    if( isset($_SESSION['user_id']) ){
        // The user is allwoed here
    
    }else{
        // The user is not allowed here
        header("Location: login.php"); exit;
    }
}

// Force the user to the dashboard if he is already logged in
function forceDashboard(){
    if( isset($_SESSION['user_id']) ){
        // The user is allowed here but redirect anyways
        header("Location: dashboard.php"); exit;

    }else{
        // The user is not allowed here
    }
}

function findUser($con, $email, $return_assoc = false){
    // Make sure the user does not exist
    $email = (string) FILTER::String( $email );

    $findUser = $con->prepare("SELECT user_id, password FROM USER WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    // if return assoc variable is set to true it returns the whole assoc array
    if($return_assoc){
        return $findUser->fetch(PDO::FETCH_ASSOC);
    }

    $user_found = (boolean) $findUser->rowCount(); //1 in boolean is true and 0 in boolean is false
    return $user_found;

    /* OR, easier to understand but more code version
    if($findUser->rowCount() == 1){
        return true;
    }

    return false; */
}

?>