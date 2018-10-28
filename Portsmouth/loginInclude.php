<?php

function Login()
{
    $File = fopen("loginInfo.txt", "r");
    $Password = fgets($File);
    
    
   echo <<<HTML
    <form action=? method="post">          
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password"
            id="password" required>
    
        <input type="submit" name="f_Login" value="Login" id="login" onclick="validate()"/> 
    
    <script type="text/javascript">var correctpassword = "<?php echo $Password; ?>";</script>
    <script type="text/javascript" src=loginJS.js></script>
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
    $File = fopen("loginInfo.txt","w");
    fwrite($File, $ChangePassword = "");
    
    LoginMain();
    echo"<input type=\"submit\" name=\"f_Home\" value=\"Home\"/>";
    
    echo <<<HTML
    <form action = ? method="post">
    
        <input type="text" placeholder="Current Password" id="currentpassword"
            required/>
    
        <input type="text" placeholder="New Password" name="newpassword"
            id="newpassword"/>
            
        <input type="text" placeholder="Re-enter Password" id="repassword" name="repassword"
            required/>
            
        <input type="submit" name="f_Save" value="Save Password" id="savepassword"
            onclick="newPassord()"/>
    
    <scirpt src="loginJS.js"></srcipt>
    </form>
HTML;
    
    $ChangePassword = $_POST['changedpassword'];
}


function ChangeMenu()
{
   echo <<<HTML
    <form action = ? method="post">
    
    
   </form> 
HTML;
   
}



?>

