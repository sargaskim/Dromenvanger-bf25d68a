<?PHP


$computter1 = 'Hoe veel vrienden zal ik vragen?'.PHP_EOL;
$computter2 = ' heeft dit als droom: ';
$Dromen = array();
$droom = array();


print ($computter1);
$nrFriends = readline("");

// if (is_numeric($nrFriends)){
    for($i = 0; $i < $nrFriends; $i++){

        echo 'Wat is jouw naam?'.PHP_EOL;
        $naam = readline("");

        echo 'Hoeveel dromen ga je opgeven?'.PHP_EOL;
        $nrDromen = readline("");

        if (is_numeric($nrDromen)){
            for($j = 0; $j < $nrDromen; $j++){

                echo 'Wat is jouw droom?'.PHP_EOL;
                $d = readline("");

                $droom[$j] =  $d;
            }
        }

        else if (!is_numeric($nrDromen)){
            echo '"'. $nrDromen. '"'. 'is geen getal, probeer het opnieuw';
            exit;
        }
        
        $Dromen[$naam] = $droom;
        
    }

    foreach ($Dromen as $naam => $droom){ 
        foreach ($droom as $i => $d){ 
            echo $naam, $computter2, $d.PHP_EOL;
        }
    }
// }

// else if (!is_numeric($nrFriends)){
//     echo '"'. $nrFriends. '"'. 'is geen getal, probeer het opnieuw';
//     exit;
// }

?>