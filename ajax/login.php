<?php 

// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "../inc/config.php";

//make sure this site was accessed over an AJAX call. otherwise the user could simply go to this site over the URL
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Always return JSON Format
    header('Content-Type: application/json');
    //header('Location: ');
    $return = []; //$array = ['Test', 'Test2', 'Test3', array('name' => 'Cyrill', 'lastname' => 'Wyrsch')];
    
    $email = Filter::String( $_POST['email'] ); 
    //$email = strtolower($email); - better in SQL Statement with LOWER() = faster 
    $password = Filter::String( $_POST['password'] ); 

    // Make sure the user does not exist
    $findUser = $con->prepare("SELECT user_id, password FROM USER WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if($findUser->rowCount() == 1){
        // User exists, try and sign them in 
        
        $User = $findUser->fetch(PDO::FETCH_ASSOC);
        $user_id = (int) $User['user_id'];
        $hashPassword = $User['password'];

        if( password_verify($password, $hashPassword) ){
            // User is signed in
            $return['redirect'] = "dashboard.php";

            $_SESSION['user_id'] = $user_id;

        }else{
            // Invalid user email/password combo
            $return['error'] = "Invalid user email/password combo";
        }

    }else{
        //They need to create a new account
        $return['error'] = "You do not have an account. <a href='register.php'>Create one now?</a>";
    }

    // Make sure the user CAN be added AND is added 

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
    //Die. Kill the scrip. Redirect the user. Do something regardless.
    exit('Site not called over AJAX');
}

?>
