<?php

require_once 'mainInclude.php';

/// Main
WriteHeader();

if(isset($_POST["f_menu"]))
    {
        DisplayMenu();
    }
else if(isset($_POST["f_events"]))
    {
        DisplayEvents();
    }
else if(isset($_POST["f_aboutUs"]))
    {
        DisplayAboutUs();
    }   
else
    {
        DisplayMain();
    }

WriteFooter();
?>