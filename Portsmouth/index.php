<?php

require_once 'mainInclude.php';

/// Main
WriteHeader();


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