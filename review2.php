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
}

function displayWinners() {
    
    $player_name = array("mike", "scot", "Tris", "suzy");
    $player_score = array(31, 45, 42, 39);
    $winner = array();
    $totalScore = 0;
    
    for ($i = 0; $i < 4; $i++) //number of players = 4
    {
        if ($player_score[$i] <= 42) //under 42
        {
            if ($player_score[$i] == 42) // exactly 42
                $winner[$i] = 8; //keeps track of which player in array won
 
            else {
                $winner[$i] = 5; //puts random number to disregard player
                $totalScore += $player_score[$i];
            }
        }
        else {
            $winner[$i] = 7; //excludes the player that went over
            $totalScore += $player_score[$i];
        }
    }
    
    
    print_r($winner);
//   print($player_score[1]);

    while ($x < 4) //displays the winner and the total score
    {
        if ($winner[$x] == 8)
            echo $player_name[$x]. " won ". $totalScore . "<br/>";
        $x++;

    }
    print_r($player1);
    echo "    ";
    print_r($player2);
     echo "      ";
    print_r($player3);
     echo "    ";
    print_r($player4);
    echo "    ";
    print_r($scores);
    echo "Why only 1?";
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