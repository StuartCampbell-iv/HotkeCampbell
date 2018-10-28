<?php


function WriteHeader()
{
    echo <<<HTML
        <!doctype html> 
        <html lang = \"en\">
        <head>
                <meta charset = \"UTF-8\">
                <title>Title</title>
                <link rel="stylesheet" href="bootstrap/css/bootstrap.css/">
                <link rel="stylesheet" href="customcss.css/">
        </head>
    <style>
    body  {
        background-image: url("images/edit9b.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height:100%;
    }
    </style>
    <body>
    <div class = "header">
        <img src = "images/edit3c.jpg" alt = "image error" width = 100% height = 320>
        <form action = ? method = "post">
            <input type="submit" name = "f_home" class = "headerButtonA" value="Home">
            <input type="submit" name = "f_menu" class = "headerButtonB" value="Menu">
            <input type="submit" name = "f_events" class = "headerButtonC" value="Events">
            <input type="submit" name = "f_aboutUs"class = "headerButtonD" value="About Us">
        </form>
    </div>
HTML;
}

function WriteFooter()
{
    echo <<<HTML
        <div class = "footer">
        </div>
    <script src = "javascriptFunctions.js"></script>
    </body>\n</html>
    
HTML;
}

function DisplayImage($FileName,$Alt,$Width = "",$Height = "")
{
	echo"<img src= \"$FileName\" alt = \"$Alt\" width = 
	\"$Width\" height = \"$Height\">";
}

function DisplayButton($BName,$Text,$FileName = "", $Alt = "")
{
	
	echo" <button type= submit name =\"$BName\" class =\"$FileNam\">$Text</button>";
}

function DisplayMain()
{
    echo"<h1>MAIN</h1>";
    
}

function DisplayMenu()
{
    $handle = fopen("menuInfo.txt", "r");
    $content = fgets($handle);
    
    echo"<div class = \"menuLeft\">";
        echo"<div class = \"menuGroup\">";
            //Appetizer
            foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //Nachos
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //Munchies
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //sides
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //Soups and salads
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //wings
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //wraps
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //burgers
        foodBlock($handle);
        echo"</div>";
    echo"</div><div class = \"menuRight\"><div class = \"menuGroup\">";
        //sandwiches
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //dinner platters
        foodBlock($handle);
        echo"</div>";
    echo"</div>";
    fclose($handle);
}

function DisplayEvents()
{
    
}

function DisplayContactUs()
{
    
}

function foodBlock($handle){
    
    $num = (int)fgets($handle);
    
    $content = fgets($handle);
    echo"<h1>" . $content . "</h1>";
    for($i = 0; $i < $num; $i++)
        {
            $content = fgets($handle);
            echo"<p>" . $content . "</p>";
        } 
}

?>
