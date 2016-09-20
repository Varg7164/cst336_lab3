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


function displayHand (){
    //parameter would be the arrays that store each player with their associated cards and total points

    /*Ideas:
      
      I need a condition that would compare the array of the players with the cards they are associated with.
      If the values match, the player's image would be displayed. 
      Then the for loop would execute, and it would echo the card imagess
      Once the for loop stops, the sum of the cards would be displayed.
      -----------------------------------------------------------------------------------
      Since getHand() will be using an associative array to store values, I would need to display the "key" which might be the 
      player's name.  I'll execute a "foreach" loop that would echo the string that opens up the images. The sum could be stored as the final
      value of the associative array. With this, I can display the current score after the deck of cards are displayed.
      -----------------------------------------------------------------------------------
      If we are using an associative array for getHand(), I might have to implement a nested-foreach loop to get access of all of the
     
     foreach ($fruits as $color=>$deck) {
          // $deck is an array
        foreach ($deck as $cards) {
        
            echo "<img src='img/cards/clubs/" . $cards . "png" />;
            print "$fruit is colored $color.<br>";
        }
}
     */
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