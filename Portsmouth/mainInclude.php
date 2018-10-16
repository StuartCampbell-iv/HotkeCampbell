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

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
