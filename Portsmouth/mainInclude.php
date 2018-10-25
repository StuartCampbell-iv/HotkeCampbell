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
        <body>     
    <div class = "header">
        <img src = "images/edit3c.jpg" alt = "image error" width = 100% height = 320>
        <form action = ? method = "post">
            <input type="button" name = "f_home" class = "headerButtonA" value="Home">
            <input type="button" name = "f_menu" class = "headerButtonB" value="Menu">
            <input type="button" name = "f_events" class = "headerButtonC" value="Events">
            <input type="button" name = "f_aboutUs"class = "headerButtonD" value="About Us">
        <form>
    </div>
HTML;
}

function WriteFooter()
{
    echo <<<HTML
        <div class = "footer">
            <img src = "images/edit6c.jpg" alt = "image error" width = 100% height = 100>
        </div>
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
    
    
}

function DisplayMenu()
{
    
}

function DisplayEvents()
{
    
}

function DisplayContactUs()
{
    
}







?>
