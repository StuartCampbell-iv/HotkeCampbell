<?php

function Login()
{
   echo <<<HTML
    <form action=? method="post">          
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password"
            id="password" autocomplete="off" required>
    
        <input type="submit" name="f_Login" value="Login" id="login" onclick="validate()"/> 
    
    <script src=loginJS.js></script>
    </form>
HTML;
        
 
}

function LoginMain()
{
   echo <<<HTML
    <form action = ? method="post">
        <input type="submit" name="f_Menu" value="Change Menu" id="menu"/>
        <input type="submit" name="f_Password" value = " Change Password" id="chgnPassword"/>
        <input type="submit" name="f_Calendar" value="Change Calendar" id="calendar"/>
    
    </form>
HTML;
}

function ChangeCalendar()
{
   echo <<<HTML
    <form action = ? method="post">
    
    
    
    </form>
HTML;
    
}


function ChangePassword()
{
    echo <<<HTML
    <form action = ? method="post">
    
    
    
    </form>
HTML;
}


function ChangeMenu()
{
   echo <<<HTML
    <form action = ? method="post">
    
    
   </form> 
HTML;
   
}



?>

