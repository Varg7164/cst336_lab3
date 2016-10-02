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
    echo $scores[0];
    echo "<img src='img/players/Scott.jpg' />";
    displayHand($player1);
    
    echo $scores[1];
    echo "<img src='img/players/Michael.jpg' />";
    displayHand($player2);
    
    echo $scores[2];
    echo "<img src='img/players/Tristen.jpg' />";
    displayHand($player3);
    
    echo $scores[3];
    echo "<img src='img/players/Unknown.png' />";
    displayHand($player4);
    
    $f = 0;
    
}

function displayHand($player1){
    
    for ($i=0; $i<sizeof($player1); $i++){
        if ($player1[$i]==0){
                continue;
            }
        if ($player1[$i]>=1 && $player1[$i]<14){
            echo "<img src='img/cards/clubs/" .($player1[$i]). ".png' />";
        }
        elseif ($player1[$i]>=14 && $player1[$i]<27){
            $player1[$i]=($player1[$i]%13);
            if ($player1[$i]==0){
                continue;
            }
            echo "<img src='img/cards/diamonds/" .($player1[$i]%13). ".png' />";
        }
        elseif ($player1[$i]>=27 && $player1[$i]<40){
            $player1[$i]=($player1[$i]%13);
            if ($player1[$i]==0){
                continue;
            }
            echo "<img src='img/cards/hearts/" .($player1[$i]%13). ".png' />";
        }
        elseif ($player1[$i]>=40 && $player1[$i]<53){
            $player1[$i]=($player1[$i]%13);
            if ($player1[$i]==0){
                continue;
            }
            echo "<img src='img/cards/spades/" .($player1[$i]%13). ".png' />";
        }
        
        //echo "<br />" . "----------------------------------------------" . "<br />";
        // echo $player1[$i] . "<br/>";
    }
        
    for ($h=0; $h<sizeof($player2); $h++){
        echo $player2[$h]%13 . "<br />";
    }
    
    for ($i=0; $i<sizeof($player2); $i++){
        if ($player2[$i]==0){
                continue;
            }
        if ($player2[$i]>=1 && $player2[$i]<14){
            echo "<img src='img/cards/clubs/" .($player2[$i]). ".png' />";
        }
        elseif ($player2[$i]>=14 && $player[$i]<27){
            $player2[$i]=($player2[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/diamonds/" .($player2[$i]%13). ".png' />";
        }
        elseif ($player2[$i]>=27 && $player[$i]<40){
            $player2[$i]=($player2[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/hearts/" .($player2[$i]%13). ".png' />";
        }
        elseif ($player2[$i]>=40 && $player[$i]<53){
            $player2[$i]=($player2[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/spades/" .($player2[$i]%13). ".png' />";
        }
    }
        
    for ($h=0; $h<sizeof($player3); $h++){
        echo $player3[$h]%13 . "<br />";
    }
    
    for ($i=0; $i<sizeof($player3); $i++){
        if ($player2[$i]==0){
                continue;
            }
        if ($player3[$i]>=1 && $player3[$i]<14){
            echo "<img src='img/cards/clubs/" .($player3[$i]). ".png' />";
        }
        elseif ($player3[$i]>=14 && $player3[$i]<27){
            $player3[$i]=($player3[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/diamonds/" .($player3[$i]%13). ".png' />";
        }
        elseif ($player3[$i]>=27 && $player3[$i]<40){
            $player3[$i]=($player3[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/hearts/" .($player3[$i]%13). ".png' />";
        }
        elseif ($player3[$i]>=40 && $player3[$i]<53){
            $player3[$i]=($player3[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/spades/" .($player3[$i]%13). ".png' />";
        }
    } 
        
    for ($h=0; $h<sizeof($player4); $h++){
        echo $player4[$h]%13 . "<br />";
    }
    
    for ($i=0; $i<sizeof($player4); $i++){
        if ($player4[$i]>=1 && $player4[$i]<14){
            echo "<img src='img/cards/clubs/" .($player4[$i]). ".png' />";
        }
        elseif ($player4[$i]>=14 && $player4[$i]<27){
            $player4[$i]=($player4[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/diamonds/" .($player4[$i]%13). ".png' />";
        }
        elseif ($player4[$i]>=27 && $player4[$i]<40){
            $player4[$i]=($player4[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/hearts/" .($player4[$i]%13). ".png' />";
        }
        elseif ($player4[$i]>=40 && $player4[$i]<53){
            $player4[$i]=($player4[$i]%13);
            if ($player2[$i]==0){
                continue;
            }
            echo "<img src='img/cards/spades/" .($player4[$i]%13). ".png' />";

        }
        // echo $player1[$i] . "<br/>";
    }
    echo "<br />" . "----------------------------------------------" . "<br />";
}



function displayWinners($player_score) {
    
    $player_name = array("player 1", "player 2", "player 3", "player 4");
    $winner = array(); //
    $totalScore = 0; //adds up all scores
    $whos_closer = 0; //keeps value of score close to 42
    $count = 0;  //keeps reminder of array possition
    $location = 0; //keeps track of what index the winnning score is in for $player_score[]
    
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
            echo $player_name[$x]. " won ". "<br/>";// $totalScore . "<br/>";
            return;
        }
        
        else if ($winner[$x] > $whos_closer) {
                $whos_closer = $winner[$x]; 
                $count = $x;
                $location = $x;
        }
    }
    
    echo $player_name[$count]. " won ". $player_score[$location] . "<br/>";
}


?>



<!DOCTYPE html>
 <link rel = "stylesheet" href = "css/style.css" type ="text/css"> 
<html>
    <head>
        <title>Silverjack</title>
    </head>
    <body>
        <h1> Silverjack</h1>
        <main>
            <?=displayWinners(getHand()) ?>
            <a id = "refresh_button" href="javascript:history.go(0)">Play Again</a> </div>
        </main>
        
        
    </body>
</html>