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
    <form>
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
    echo "<h2>Footer</h2>";
    echo "</body>\n</html>\n";
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
