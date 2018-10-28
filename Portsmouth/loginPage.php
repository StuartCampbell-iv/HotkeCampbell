<?php




require_once("loginInclude.php");

if(isset($_POST['f_Login']))
    LoginMain();
else 
    Login();

?>