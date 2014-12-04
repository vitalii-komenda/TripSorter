<?php

namespace App\Card;

class Flight extends Card implements IFormatter{

    protected $number;
    protected $gate;
    protected $seat;
    
    public function __construct($card)
    {
        $this->number = $card['number'];
        $this->gate = $card['gate'];
        $this->seat = $card['seat'];
        $this->baggage = $card['baggage'];
        parent::__construct($card);
    }    
    
    public function getNumber()
    {
        return $this->number;
    }
    
    public function getGate()
    {
        return $this->gate;
    }
    
    public function getSeat()
    {
        return $this->seat;
    }
    
    public function getBaggage()
    {
        return $this->baggage;
    }
    
    public function render()
    {
        return sprintf(
            'From %s, take flight %s to %s. Gate %s, seat %s.
Baggage %s.',
            $this->getFrom(),
            $this->getNumber(),
            $this->getTo(),
            $this->getGate(),
            $this->getSeat(),
            $this->getBaggage()
        );
    }
}