<?php
if(!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate:Basic realm="My Realm');
    header('HTTP/1.0 401 Unauthorized');
    echo 'could not login please enter a username and password';
    exit;
}else{
    echo" <p>Hello{$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered{$_SERVER['PHP_AUTH_PW']} as your pasword</p>";
}
?>