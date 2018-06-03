<?php

function convertChoice($choice){
    if ($choice=="R"||$choice=="r"||$choice===0){
        return "Rock";
    }
    elseif ($choice=="P"||$choice=="p"||$choice==1){
        return "Paper";
    }
    elseif ($choice=="S"||$choice=="s"||$choice==2) {
        return "Scissors";
    }
    else {
        die("Wrong choice! Choose between R, P or S!");
    }
}

function generateComputerChoice(){
    return rand(0,2);
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
$convertedUserChoice= convertChoice($userChoice);
echo "converted user's choice: ", $convertedUserChoice, PHP_EOL;

$computerChoice= generateComputerChoice();
$convertedComputerChoice= convertChoice($computerChoice);
echo "converted computer's choice: ", $convertedComputerChoice, PHP_EOL;

compareChoices($convertedUserChoice, $convertedComputerChoice);
