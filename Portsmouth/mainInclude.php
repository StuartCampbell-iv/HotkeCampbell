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
        </head>
        <body>     

        <h1 class="jumbotron">Portmouth Tavern<div class="form-control">
    <form action = ? method = "post">
        <input type="button" class=".btn-primary" value="Home">
        <input type="button" value="Menu">
        <input type="button" value="Events">
        <input type="button" value="About Us">
        </div></h1>
    <form>
HTML;
}

function WriteFooter()
{
    echo <<<HTML
    
    <div class="jumbotron">
        <h2>Footer</h2>
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

function HomePage()
{
    
    
}

function MenuPage()
{
    
}

function EventsPage()
{
    
}

function ContactUsPage()
{
    
}







?>
