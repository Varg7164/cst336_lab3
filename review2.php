<?php
/*
function displayRandomCard() {
    
    $deck = array("clubs"=>1, "clubs"=>2, "clubs"=>3, "clubs"=>4, "clubs"=>5, "clubs"=>6, "clubs"=>7, "clubs"=>8, "clubs"=>9, "clubs"=>10, "clubs"=>11, "clubs"=>12, "clubs"=>13,
                  "diamonds"=>1, "diamonds"=>2, "diamonds"=>3, "diamonds"=>4, "diamonds"=>5, "diamonds"=>6, "diamonds"=>7, "diamonds"=>8, "diamonds"=>9, "diamonds"=>10, "diamonds"=>11, "diamonds"=>12, "diamonds"=>13,
                  "hearts"=>1, "hearts"=>2, "hearts"=>3, "hearts"=>4, "hearts"=>5, "hearts"=>6, "hearts"=>7, "hearts"=>8, "hearts"=>9, "hearts"=>10, "hearts"=>11, "hearts"=>12, "hearts"=>13,
                  "spades"=>1, "spades"=>2, "spades"=>3, "spades"=>4, "spades"=>5, "spades"=>6, "spades"=>7, "spades"=>8, "spades"=>9, "spades"=>10, "spades"=>11, "spades"=>12, "spades"=>13,);
    for ($i = 1; $i <= 52; $i++) {
    //$deck = array();
   // for ($i = 1; $i <= 52; $i++) {
    //    $deck[] = $i;
    //}
    
    shuffle($deck);
    print_r($deck);
    
    $card = array_pop($deck);
    
    echo $card .  "<br />";
    
    $suits = array("clubs", "diamonds", "hearts", "spades"); //match with the folder name
    $randomSuitIndex = rand(0,3);
    //$randomSuit = $suits[$randomSuitIndex];
    
    echo "<img src='img/cards/clubs/" . rand(1,13). ".png' />";
    echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";
}*/

function getHand(){
    
    //variable for counting the number of players
    $players = 0;
    
    //creates the array that will hold the individual scores
    $scores = array(0, 0, 0, 0);
    
    //creates arrays for the cards for each player
    $player1 = array();
    $player2 = array();
    $player3 = array();
    $player4 = array();
    
    //value that cards will stop being distributed at
    $stop = 36;
    
    //creates a score counter
    $score = 0;
    
    //creates the deck
    $deck = array(/*"clubs"=>1, "clubs"=>2, "clubs"=>3, "clubs"=>4, "clubs"=>5, "clubs"=>6, "clubs"=>7, "clubs"=>8, "clubs"=>9, "clubs"=>10, "clubs"=>11, "clubs"=>12, "clubs"=>13,
                  "diamonds"=>1, "diamonds"=>2, "diamonds"=>3, "diamonds"=>4, "diamonds"=>5, "diamonds"=>6, "diamonds"=>7, "diamonds"=>8, "diamonds"=>9, "diamonds"=>10, "diamonds"=>11, "diamonds"=>12, "diamonds"=>13,
                  "hearts"=>1, "hearts"=>2, "hearts"=>3, "hearts"=>4, "hearts"=>5, "hearts"=>6, "hearts"=>7, "hearts"=>8, "hearts"=>9, "hearts"=>10, "hearts"=>11, "hearts"=>12, "hearts"=>13,
                  "spades"=>1, "spades"=>2, "spades"=>3, "spades"=>4, "spades"=>5, "spades"=>6, "spades"=>7, "spades"=>8, "spades"=>9, "spades"=>10, "spades"=>11, "spades"=>12, "spades"=>13,*/);
    for ($i = 1; $i <= 52; $i++) {
        $deck[] = $i;
    }
    
    //shuffles the deck
    shuffle($deck);
    
    //gets a random suit
    $suits = array("clubs", "diamonds", "hearts", "spades"); //match with the folder name
    $randomSuitIndex = rand(0,3);
    $randomSuit = $suits[$randomSuitIndex];
    
    //test printing of array
    //prints each value of the array one a new line
        for($i = 0; $i < $players; $i++){
            if($players == 0)
            {
                if($scroes <= $stop){
                    $player1[] = $deck[$i];
                    $score = $score + $deck[$i];
                }
                else{
                    $players++;
                    $score = 0;
                }
            }
           if($players == 1)
            {
                if($scroes <= $stop){
                    $player1[] = $deck[$i];
                    $score = $score + $deck[$i];
                }
                else{
                    $players++;
                    $score = 0;
                }
            }
            if($players == 2)
            {
                if($scroes <= $stop){
                    $player1[] = $deck[$i];
                    $score = $score + $deck[$i];
                }
                else{
                    $players++;
                    $score = 0;
                }
            }
            if($players == 3)
            {
                if($scroes <= $stop){
                    $player1[] = $deck[$i];
                    $score = $score + $deck[$i];
                }
                else{
                    $players++;
                    $score = 0;
                }
            }
        }
}



?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=getHand() ?>
    

    </body>
</html>