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