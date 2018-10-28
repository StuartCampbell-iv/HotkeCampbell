<?php




require_once("loginInclude.php");

if(isset($_POST['f_Login']))
    LoginMain();
if(isset($_POST['f_Password']))
    ChangePassword();
else if (isset($_POST['f_MainMenu']))
    Login();
else
    Login();

?>