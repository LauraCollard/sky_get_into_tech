<?php

function convertUserChoice($choice){
    switch($choice){
        case ($choice=="R"||$choice=="r"):
            return $convertedChoice="Rock";
        
        case ($choice=="P"||$choice=="p"):
            return $convertedChoice="Paper";
        
        case ($choice=="S"||$choice=="s"):
            return $convertedChoice="Scissors";
        
        default:
            die("Wrong choice! Choose between R, P or S!");
    }
}

function generateChoice(){
    $computerChoiceNumber= rand(0,2);
    if($computerChoiceNumber==0){
        return "Rock";
    }
    elseif($computerChoiceNumber==1){
        return "Paper";
    }
    else {
        return "Scissors";
    }
}

function compareChoices($user, $computer){
    if($user==$computer){
        echo "It's a tie! You chose $user and the computer chose $computer.";
    }
    elseif($user=="Paper"&&$computer=="Rock" ||
            $user=="Scissors"&&$computer=="Paper"||
            $user=="Rock"&&$computer=="Scissors"){
        echo "You win! You chose $user and the computer chose $computer.";
    }
    else{
        echo "You lose! You chose $user and the computer chose $computer.";
    }
}

echo "Welcome to a rock paper scissors game against the computer! Choose between R, P or S.";
$userChoice= stream_get_line(STDIN, 100, "\n");
$convertedUserChoice= convertUserChoice($userChoice);
$computerChoice= generateChoice();
compareChoices($convertedUserChoice, $computerChoice);