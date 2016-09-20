<?php

function displayRandomCard() {
    
    $deck = array();
    for ($i = 1; $i <= 52; $i++) {
        $deck[] = $i;
    }
    
    shuffle($deck);
    print_r($deck);
    
    $card = array_pop($deck);
    
    echo $card . "<br />";
    
    $suits = array("clubs", "diamonds", "hearts", "spades"); //match with the folder name
    $randomSuitIndex = rand(0,3);
    $randomSuit = $suits[$randomSuitIndex];
    
    echo "<img src='img/cards/clubs/" . rand(1,13). ".png' />";
    echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";
}



function displayWinners() {
    
    $player_name = array("mike", "scot", "Tris", "suzy");
    $player_score = array(35, 42, 43, 38);
    $winner = array();
    
    for ($i = 0; $i < 4; $i++) //number of players = 4
    {
        if ($player_score[$i] <= 42) //under 42
        {
            if ($player_score[$i] == 42) // exactly 42
            {
                $winner[$i] = 8; //keeps track of which player in array won
                
            }
            else $winner[$i] = 5; //puts random number to disregard player
        }
        else $winner[$i] = 7; //excludes the player that went over
    }
    
    
    print_r($winner);
//   print($player_score[1]);

    while ($x < 4)
    {
        if ($winner[$x] == 8)
        echo $player_name[$x] . "won. </br>";
        $x++;
    }


}


?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=displayRandomCard() ?>
        <?=displayWinners() ?>
    

    </body>
</html>