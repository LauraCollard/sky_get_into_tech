<?php

$userChoice= $_REQUEST["choice"];

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
        echo "It's a tie! <br>You chose $user and the computer chose $computer.";
    }
    elseif($user=="Paper"&&$computer=="Rock" ||
            $user=="Scissors"&&$computer=="Paper"||
            $user=="Rock"&&$computer=="Scissors"){
        echo "You win! <br>You chose $user and the computer chose $computer.";
    }
    else{
        echo "You lose! <br>You chose $user and the computer chose $computer.";
    }
}

$computerChoice= generateChoice();
compareChoices($userChoice, $computerChoice);