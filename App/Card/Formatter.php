<?php

namespace App\Card;

class Formatter{
    
    public function render($cards)
    {
        $response = [];
        foreach($cards as $card) { 
            $response[] = $card->render();
        }
        $response[] = 'You have arrived at your final destination.';

        return $response;
    }
}