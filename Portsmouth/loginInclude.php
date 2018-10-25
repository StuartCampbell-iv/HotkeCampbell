<?php

function Login()
{
   echo <<<HTML
        <label for="username">UserName</label>
        <input type"text" placeholder="Enter Username" name="username"
            required>
            
        <label for="pswd">Password</label>
        <input type="password" placeholder="Enter Password" name="pswd"
            required>
    
        <button type="submit" name"f_Login">Login</button>
HTML;
        
 
}


?>

