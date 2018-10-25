var attempt = 3;

function validate()
{
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    
    if(username.value === "PortsmouthTavern" && password.value === "default")
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
        username.disabled = true;
        password.disabled = true;
        document.getElementById("login").disabled = true;
    }
    }
}

