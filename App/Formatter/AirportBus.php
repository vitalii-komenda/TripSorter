<?php

namespace App\Formatter;

class AirportBus implements IFormatter{

    public function render( $card)
    {
        return sprintf(
            'Take the %s from %s to %s. No seat assignment.',
            $card['transport_type'],
            $card['from'],
            $card['to']
        );
    }
}