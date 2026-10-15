<?php

//weekly timetable
$timetable = [ "saturday" => ["web2","english"], "sunday" => ["oop","web2","math"], "monday" => ["database"], "tuesday" => ["oop","web2"]];
$totalclass = 0;
    echo "<table border = '1' cellpadding = '8'> ";
    echo "<tr><th>day</th> <th> class </th> <th> subjects </th> </tr>";

    foreach ($timetable as $day => $class){
        $numberOfClass = count($class);
        $totalclass += $numberOfClass; 
        echo "<tr>"; 
        echo "<td>$day ($numberOfClass)</td>";
        foreach($class as $subject){
            echo "<td>$subject</td>";
        }
        echo "</tr>"; }

        echo "</table>";
        echo "<p> Total class this week:
        $totalclass</p>";
        
//Registration access
$cerdits = 18;
$feePaid = true;

$canRegister = ($cerdits >= 15) && $feePaid;

    if ($canRegister){
        echo " Registration allowed";
    } else{
        echo " Registration not allowed";
    }



?>
