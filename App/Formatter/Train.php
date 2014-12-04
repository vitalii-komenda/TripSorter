<?php

namespace App\Formatter;

class Train implements IFormatter{

    public function render($card)
    {
        return sprintf(
            'Take %s %s from %s to %s. Sit in seat %s.',
            $card['transport_type'],
            $card['number'],
            $card['from'],
            $card['to'],
            $card['seat']
        );
    }
}