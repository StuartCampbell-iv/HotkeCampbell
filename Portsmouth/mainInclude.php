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
    <div class = "header">
        <img src = "images/edit3c.jpg" alt = "image error" width = 100% height = 320>
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
    echo"<h1>MAIN</h1>";
    
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
        //Nachos
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //Munchies
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
        echo"</div><div class = \"menuGroup\">";
        //wraps
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //burgers
        foodBlock($handle);
        echo"</div>";
    echo"</div><div class = \"menuRight\"><div class = \"menuGroup\">";
        //sandwiches
        foodBlock($handle);
        echo"</div><div class = \"menuGroup\">";
        //dinner platters
        foodBlock($handle);
        echo"</div>";
    echo"</div>";
    fclose($handle);
}

function DisplayEvents()
{
    echo"
        
        <form action = ? method = \"post\">
        <input type=\"submit\" name = \"f_monthSub\" id = \"add\" value= \"Previous\">
        <input type=\"submit\" name = \"f_monthAdd\" id = \"sub\"value= \"Next\">
        <table  border=\"1\"  id=\"calendar\" >
            <tr><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th>
                <th>Thursday</th><th>Friday</th><th>Saturday</th>
            </tr>
            
        ";
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
                echo "<input type = \"number\" name = \"month\" value =\"0\" >" ;
            }
            
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
            
            echo"<h1>" .  $maxDay->format('M') . "</h1>";
            
            $counter = 0;
            $currentDay = $backtrack->format('d');
            while($maxDay->format('m - d') != $backtrack->format('m - d'))
            {
                
                echo"<tr>";
                $counter2 = 0;
                while($counter2 < 7 && $maxDay->format('m - d') != $backtrack->format('m - d'))
                {
                    echo"<td>" . $currentDay . "</td>"; 
                    $counter += 1;
                    $counter2 +=1;
                    $backtrack->add($oneDay);
                    $currentDay = $backtrack->format('d');
                }
                echo"</tr>";
            }
            $month_add = 10;
        echo "</table></form>";
}

function DisplayContactUs()
{
    
}

function foodBlock($handle){
    
    $num = (int)fgets($handle);
    
    $content = fgets($handle);
    echo"<h1>" . $content . "</h1>";
    for($i = 0; $i < $num; $i++)
        {
            $content = fgets($handle);
            echo"<p>" . $content . "</p>";
        } 
}

?>
