<?php

namespace App\Card;

class Train extends Card implements IFormatter{

    protected $number; 
    protected $seat; 
    
    public function __construct($card)
    {
        $this->number = $card['number']; 
        $this->seat = $card['seat']; 
        parent::__construct($card);
    }    
    
    public function getNumber()
    {
        return $this->number;
    }
     
    public function getSeat()
    {
        return $this->seat;
    }

    
    public function render()
    {
        return sprintf(
            'Take %s %s from %s to %s. Sit in seat %s.',
            $this->getTransportType(),
            $this->getNumber(),
            $this->getFrom(),
            $this->getTo(),
            $this->getSeat()
        );
    }
}