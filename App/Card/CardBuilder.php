<?php

namespace App\Card;

class CardBuilder{

    protected $types = [
        'train' => 'Train',
        'airport bus' => 'AirportBus',
        'flight' => 'Flight'
    ];
    
    public function fromArray($card)
    {
        if (isset($this->types[$card['transport_type']])) {
            $type = "App\\Card\\" . $this->types[$card['transport_type']];
            return new $type($card);
        }
        
        throw new \Exception('Unkown transport type: ' . $card['transport_type']);
    }
 

}