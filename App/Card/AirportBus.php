<?php

namespace App\Card;

class AirportBus extends Card implements IFormatter{
    
    public function render()
    {
        return sprintf(
            'Take the %s from %s to %s. No seat assignment.',
            $this->getTransportType(),
            $this->getFrom(),
            $this->getTo()
        );
    }
}