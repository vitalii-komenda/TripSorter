<?php

namespace App\Formatter;

class Formatter{

    protected $types = [
        'train' => 'Train',
        'airport bus' => 'AirportBus',
        'flight' => 'Flight'
    ];

    public function __construct()
    {
        foreach($this->types as $key => $type) {
            $formatter = "App\\Formatter\\$type";
            $this->types[$key] = new $formatter;
        }
    }

    public function render(array $cards)
    {
        $response = [];
        foreach($cards as $card) {
            $formatter = $this->types[$card['transport_type']];
            $response[] = $formatter->render($card);
        }
        $response[] = 'You have arrived at your final destination.';

        return $response;
    }
}