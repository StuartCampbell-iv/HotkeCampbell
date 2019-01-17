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
                <script src = "javascriptFunctions.js"></script>
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
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class = "header">
        <img src = "images/edit3e.jpg" alt = "image error" width = 100% height = 320>
        <form action = ? method = "post">
            <input type="submit" name = "f_home" class = "headerButtonA" value="Home">
            <input type="submit" name = "f_menu" class = "headerButtonB" value="Menu">
            <input type="submit" name = "f_events" class = "headerButtonC" value="Events" id = "events">
            <input type="submit" name = "f_aboutUs" class = "headerButtonD" value="About Us">
        </form>
    </div>
HTML;
    date_default_timezone_set ('America/Toronto');
}

function WriteFooter()
{
    echo <<<HTML
        <div class = "footer">
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
	
	echo" <button type= submit name =\"$BName\" class =\"$FileName\">$Text</button>";
}

function DisplayMain()
{
    echo <<<HTML
    <div class="fb-page" data-href="https://www.facebook.com/portstavern" data-tabs="timeline" 
    data-width="500" data-small-header="false" data-adapt-container-width="true" 
    data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/portstavern" 
    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/portstavern">Portsmouth Tavern</a></blockquote></div>
    
HTML;
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
        //sides
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //Soups and salads
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //wings
        foodBlock($handle);
        echo"</div></div><div class = \"menuRight\"><div class = \"menuGroup\">";
        //wraps
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //burgers
        foodBlock($handle);
        echo"</div>";
        echo"<div class = \"menuGroup\">";
        //sandwiches
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //dinner platters
        foodBlock($handle);
        echo"</div>";
    echo"</div>";
    
    echo"<script>
        var acc = document.getElementsByClassName(\"accordion\");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener(\"click\", function() {
            this.classList.toggle(\"active\");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + \"px\";
            } 
          });
        }
        </script>";
    fclose($handle);
}

function DisplayEvents()
{
    echo"<form action = ? method = \"post\">
            <div class = \"monthNumber\">";
    
            //Add or subtract the html variable held to keep track of the month
            if(isset($_POST['month']))
            {
                $month_add = $_POST['month'];
                if(isset($_POST['f_monthSub']))
                {
                    $month_add -=1;
                }
                else if (isset($_POST['f_monthAdd']))
                {
                    $month_add += 1;
                }
                echo "<input type = \"number\" name = \"month\" value = " . $month_add . ">" ;
            }
            else
            {
                $month_add = 0;
                echo"   <input type = \"number\" name = \"month\" value =\"0\" >"; 
            }
            
            //Previous button 
            echo"</div>
                    <input class = \"monthHeaderPrevious\" type=\"submit\" name = \"f_monthSub\" id = \"add\" value= \"Previous\">";
            
            if($month_add >= 0)
            {
                $add = true;
            }
            else
            {
                $add = false;
                $month_add = $month_add *-1;
            }
            $interval = new DateInterval('P' . $month_add . 'M');
            $backtrack = new DateTime('first day of this month');
            $maxDay = new DateTime('first day of this month');
            
            if($add)
            {
                $backtrack->add($interval);
                $maxDay->add($interval);
            }
            else
            {
                $backtrack->sub($interval);
                $maxDay->sub($interval);
            }
            
            $month = $maxDay->format('m');
            $year = $maxDay->format('y');
            // Display month 
            echo"<div class = \"monthHeader\"> <h1>" .  fullMonth($backtrack) . "</h1> </div>";
            
            // Next button
            echo"
                <input class = \"monthHeaderNext\" type=\"submit\" name = \"f_monthAdd\" id = \"sub\"value= \"Next\">
                <table  border=\"1\"  id=\"calendar\" >
                    <tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th>
                        <th>Thursday</th><th>Friday</th><th>Saturday</th>
                    </tr>";
            
            $maxDay->add(date_interval_create_from_date_string('1 month'));
            
            $oneDay = date_interval_create_from_date_string('1 days');
            
            while($backtrack->format('D') != "Sun")
            {
                $backtrack->sub($oneDay);
            }
            while($maxDay->format('D') != "Sun")
            {
                $maxDay->add($oneDay);
            }
            
            $counter = 0;
            $currentDay = $backtrack->format('d');
            while($maxDay->format('m - d') != $backtrack->format('m - d'))
            {
                
                echo"<tr>";
                $counter2 = 0;
                while($counter2 < 7 && $maxDay->format('m - d') != $backtrack->format('m - d'))
                {
                    echo"<td>" . $currentDay;
                    $events = loadEvents($month,$year);
                    //If there are events for this month, then is there an event for current Day
                    if(!empty($events))
                    {
                        for($i = 0; $i < sizeof($events); $i++)
                        {
                            if($events[$i]->getDay() == $currentDay)
                            {
                                echo "<p>" . $events[$i]->getDesc() . "</p>";
                            }
                        }
                    }
                    //
                    echo "</td>"; 
                    $counter += 1;
                    $counter2 +=1;
                    $backtrack->add($oneDay);
                    $currentDay = $backtrack->format('d');
                }
                echo"</tr>";
            }
        echo "</table></form>";
        
        $testEvent = new clsEvent($backtrack, "some desc idk");
          // Month Year Day Time Desc
        echo"<h1>" . $testEvent->getMonth() . $testEvent->getYear() . $testEvent->getDay() .  $testEvent->getTime() . $testEvent->getDesc() . "</h1>";
}

function DisplayContactUs()
{
    
}

function foodBlock2($handle){
    
    $num = (int)fgets($handle);
    
    $content = fgets($handle);
    echo"<h1>" . $content . "</h1>";
    for($i = 0; $i < $num; $i++)
        {
            $content = fgets($handle);
            echo"<p>" . $content . "</p>";
        } 
}

function foodBlock($handle){
    
    $num = (int)fgets($handle);
    
    $content = fgets($handle);
    echo"<button class=\"accordion\">" . $content . "</button>";
    
    echo"<div class = \"panel\">";
    for($i = 0; $i < $num; $i++)
        {
            $content = fgets($handle);
            echo"<p>" . $content . "</p>";
        } 
    echo"</div>";
}

function fullMonth($date)
{
    $month = "";
    switch($date->format('M'))
    {
        case "Jan":
            $month = "January";
            break;
        case "Feb":
            $month = "February";
            break;
        case "Mar":
            $month = "March";
            break;
        case "Apr":
            $month = "April";
            break;
        case "May":
            $month = "May";
            break;
        case "Jun":
            $month = "June";
            break;
        case "Jul":
            $month = "July";
            break;
        case "Aug":
            $month = "August";
            break;
        case "Sep":
            $month = "September";
            break;
        case "Oct":
            $month = "October";
            break;
        case "Nov":
            $month = "November";
            break;
        case "Dec":
            $month = "December";
            break;
    }
    return $month;
}

function loadEvents($searchedMonth, $searchedYear)
{
    $format = ("mydhi");
    $eventIndex = 0;
    $handle = fopen("eventInfo.txt", "r");
    
    while(!feof($handle))
    {
        $content = fgets($handle);
        $month = substr($content,0,2);
        $year = substr($content,2,2);
        if($month == $searchedMonth && $year == $searchedYear)
        {
            $day = substr ($content,4,2);
            $hours = substr($content,6,2);
            $minutes = substr($content,8,2);
            $desc = substr($content, 10 );
            $date = date_create_from_format($format,($month . $year . $day . $hours . $minutes));
            $eventArray[$eventIndex] = new clsEvent($date, $desc);
        }
    }
    if(isset($eventArray))
    {
        return $eventArray;
    }
    else 
    {
        return NULL;
    }
}

function saveEvent($event)
{
    
}

?>
