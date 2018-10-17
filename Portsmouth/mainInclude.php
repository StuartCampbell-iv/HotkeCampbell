<?php


function WriteHeader()
{
    echo <<<HTML
        <!doctype html> 
        <html lang = \"en\">
        <head>
                <meta charset = \"UTF-8\">
                <title>Title</title>
        </head>
        <body>     

        <h1 class="jumbotron">Portmouth Tavern<div class="form-control">
        <button>Home</button>
        <button>Menu</button>
        <button>Events</button>
        <button>About Us</button>
        </div></h1>
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
	
	echo" <button type= submit name =\"$BName\" class =\"$FileName\">\"$Text\"</button>";
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
