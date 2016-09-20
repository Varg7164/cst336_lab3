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





?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=displayRandomCard() ?>
    

    </body>
</html>