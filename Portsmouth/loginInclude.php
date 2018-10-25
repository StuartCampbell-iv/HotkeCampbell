<?php

function Login()
{
   echo <<<HTML
    <form
        <label for="username">UserName</label>
        <input type"text" placeholder="Enter Username" name="username"
            id="username" required>
            
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password"
            id="password" required>
    
        <button type="submit" name"f_Login" id="login" onclick="validate()">Login</button>
    <script src=loginJS.js></script>
HTML;
        
 
}


?>

