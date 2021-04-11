<?php 

// If there is no constant defined calld __CONFIG__, do ot load this file
if(!defined('__CONFIG__')){
    exit('You do not have a confi file');

    // TODO: redirect here for Productin deploy
}

// Our config is below


// Include the DB php files
include_once "classes/db.class.php";

$con = DB::getConnection();

?>