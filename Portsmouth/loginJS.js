

var correctpassword;

var attempt = 3;

function validate()
{
    
    var password = document.getElementById("password");
    
    if(password.value === correctpassword)
    {
        alert("Login Successful");
        
    }
 
    
}
    


function newPassword()
{
    var currentpassword = document.getElementById("currentpassword");
    var newpassword = document.getElementById("newpassword");
    var repassword = document.getElementById("repassword");
    var changedpassword;
    
    if (newpassword.value === repassword && currentpassword === correctpassword)
    {
        alert("Password Changed")
        changedpassword = repassword;
        $.post('loginInclude.php', changedpassword);
    }
  
}
    
    