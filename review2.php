<?php
function getHand(){
    
    //variable for counting the number of players
    $players = 0;
    
    //creates arrays for the cards for each player
    $player1 = array();
    $player2 = array();
    $player3 = array();
    $player4 = array();
    
    //array to hold the scores of each player
    $scores = array();
    
    //value that cards will stop being distributed at
    $stop = 36;
    
    //creates the deck
    $deck = array();
    for ($i = 1; $i <= 52; $i++) {
        $deck[] = $i;
    }
    
    //shuffles the deck
    shuffle($deck);
    
    $j = 0;
    $k = 0;
    $temp;
    
    //test printing of array
    //prints each value of the array one a new line
    for($i = 0; $i < 4; $i++){
        while($players == 0)
        {
            if($score < $stop){
                $player1[$j] = $deck[$k];
                
                if($deck[$k] >= 13){
                    $temp = $deck[$k] % 13;
                    $player1[$j] = $deck[$k];
                    $score = $score + $temp;
                }
                
                else{
                    $score = $score + $deck[$k];
                }

                $k++;
                $j++;
            }
            
            if($score >= $stop){
                $scores[$players] = $score;
                $players++;
                $j = 0;
                $score = 0;
            }
        }
       while($players == 1)
        {
            if($score < $stop){
                $player2[$j] = $deck[$k];
                
                if($deck[$k] >= 13){
                    $temp = $deck[$k] % 13;
                    $player2[$j] = $deck[$k];
                    $score = $score + $temp;
                }
                
                else{
                    $score = $score + $deck[$k];
                }
                $k++;
                $j++;
            }
            
            if($score >= $stop){
                $scores[$players] = $score;
                $players++;
                $j = 0;
                $score = 0;
            }
        }
        while($players == 2)
        {
            if($score < $stop){
                $player3[$j] = $deck[$k];
                
                if($deck[$k] >= 13){
                    $temp = $deck[$k] % 13;
                    $player3[$j] = $deck[$k];
                    $score = $score + $temp;
                }
                
                else{
                    $score = $score + $deck[$k];
                }

                $k++;
                $j++;
            }
            
            if($score >= $stop){
                $scores[$players] = $score;
                $players++;
                $j = 0;
                $score = 0;
            }
        }
        while($players == 3)
        {
            if($score < $stop){
                $player4[$j] = $deck[$k];
                
                if($deck[$k] >= 13){
                    $temp = $deck[$k] % 13;
                    $player4[$j] = $deck[$k];
                    $score = $score + $temp;
                }
                
                else{
                    $score = $score + $deck[$k];
                }
                
                $k++;
                $j++;
            }
            
            if($score >= $stop){
                $scores[$players] = $score;
                $players++;
                $j = 0;
                $score = 0;
            }
        }
    }
    
    // displayHand($player1, $player2, $player3, $player4);
    
    $f = 0;
    
    ///////used to display the scores/////////////////////////
    
    while ($f < 4) {
        echo $scores[$f] . "<br/>";
        $f++;
    }
    return $scores;
/////////////////////////////////////////////////////////
    
}

function displayHand($player1, $player2, $player3, $player4){
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
      If we are using an associative array for getHand(), I might have to implement a nested-foreach loop to get access of all of the*/
     
    //  foreach ($hand as $cards=>$deck) {
    //       // $deck is an array
    //     foreach ($deck as $cards) {
        
    //         echo "<img src='img/cards/clubs/" . $cards . "png' />";
    //         //prints the cards of the player's hand
    //     }
    // }
    
    for ($i=0; $i<4; $i++){
        echo $player1[$i] . "<br/>";
}
}



function displayWinners($player_score) {
    
    $player_name = array("player 1", "player 2", "player 3", "player 4");
    $winner = array(); //
    $totalScore = 0; //adds up all scores
    $whos_closer = 0; //keeps value of score close to 42
    $count = 0;  //keeps reminder of array possition
    
    for ($i = 0; $i < 4; $i++) //number of players = 4
    {
        if ($player_score[$i] <= 42) //under 42
        {
            if ($player_score[$i] == 42) // exactly 42
                $winner[$i] = 2; //keeps track of which player in array won
 
            else {
                $winner[$i] = $player_score[$i]; //keeps record of score
                $totalScore += $player_score[$i]; 
            }
        }
        else {
            $winner[$i] = null; //excludes the player that went over
            $totalScore += $player_score[$i];
        }
    }
    
    for ($x = 0; $x < 4; $x++) //displays the winner and the total score
    {
        if ($winner[$x] == 2) {
            echo $player_name[$x]. " won ". $totalScore . "<br/>";
            return;
        }
        else if ($winner[$x] > $whos_closer) {
                $whos_closer += $winner[$x]; 
                $count = $x; 
        }
    }
    
    echo $player_name[$count]. " won ". $totalScore . "<br/>";
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Silverjack</title>
    </head>
    <body>
        
        <?=displayWinners(getHand()) ?>
        
    </body>
</html>