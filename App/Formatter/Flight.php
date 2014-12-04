<?php

namespace App\Formatter;

class Flight implements IFormatter{

    public function render($card)
    {
        return sprintf(
            'From %s, take flight %s to %s. Gate %s, seat %s.
Baggage %s.',
            $card['from'],
            $card['number'],
            $card['to'],
            $card['gate'],
            $card['seat'],
            $card['baggage']
        );
    }
}