<?php
require_once 'mainInclude.php';
require_once 'clsEvent.php';

/// Main
WriteHeader();

if(isset($_POST['f_menu']))
    {
        DisplayMenu();
    }
else if((isset($_POST['f_events'])) || (isset($_POST['f_monthSub'])) || (isset($_POST['f_monthAdd'])))
    {
    loadEvents("02","12");
    DisplayEvents();
    }
else if(isset($_POST['f_aboutUs']))
    {
        DisplayAboutUs();
    }   
else
    {
        DisplayMain();
    }

WriteFooter();
?>