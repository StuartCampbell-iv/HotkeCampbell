<?php

require_once 'mainInclude.php';

/// Main
WriteHeader();

if (isset($_POST['f_MenuPage']))
{
    MenuPage();
}
else if (isset($_POST['f_EventsPage']))
{
    EventsPage();
}
else if (isset($_POST['f_ContactUsPage']))
{
    ContactUsPage();
}
else
{
    HomePage();
}

WriteFooter();
?>