<?php
    function display_greetings(){
        $hour=date('h');
        
        if($hour>=0 and $hour<=11){
            echo("Welcome to FAS-SUSL, Good Morning...!");
        }
        else if($hour>=12 and $hour<=15){
            echo("Welcome to FAS-SUSL, Good Aftenoon...!");
        }
        elseif($hour>=15 and $hour<=20){
            echo("Welcome to FAS-SUSL, Good Evening...!");

        }
        else{
            echo("Welcome to FAS-SUSL, Good night...!");
        }
    }
    
?>