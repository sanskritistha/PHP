<?php
// //start the session
// session_start();
// //set a session variable
// $_SESSION['batch']='bim';


// //acess the session variable
// echo $_SESSION['batch'];
// //remove all session varaible
// session_unset();


// //destroy the session
// session_destroy();
//!!!
//b no--configuring session related setting
//set session timeout to 30 minutes
ini_set('session.gc_maxlifetime',1800);
//use cookies to store the session ID
ini_set('session.use_cookies',1);
//only transmit session id over encrypted connections(HTTPS)
ini_set('session.cookie_secure',1);
// Restrict session access to the same site 
ini_set('session.cookie_samesite','lax');
//set a custom session name
session_name('my_custom_session');
//start the configured session
session_start();



?>