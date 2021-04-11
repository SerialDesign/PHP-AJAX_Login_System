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
    
    // Make sure the user does not exist

    // Make sure the user CAN be added AND is added 

    // Return the proper information back to JavaScript to redirect us
    $return['redirect'] = '/asdf.php';
    $return['name'] = 'Cyrill';

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
}else{
    //Die. Kill the scrip. Redirect the user. Do something regardless.
    exit('Site not called over AJAX');
}

?>
