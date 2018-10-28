var attempt = 3;

function validate()
{
    var password = document.getElementById("password");
    
    if(password.value === "default")
    {
        alert("Login successful")
        window.location = "login.php";
    }
    
    else
    {
        attempt--;
        alert("You have" +attempt+ "left");
    
    
    if(attmept === 0)
    {
        password.disabled = true;
        document.getElementById("login").disabled = true;
    }
    }
}

function savePassword()
{
    
}
