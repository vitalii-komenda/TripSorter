<?php

namespace App\Card;

abstract class Card{
    
    protected $from;
    protected $to;
    protected $transportType;

    public function __construct($card)
    {
        $this->from = $card['from'];
        $this->to = $card['to'];
        $this->transportType = $card['transport_type'];
    }
    
    public function getFrom()
    {
        return $this->from;
    }
    
    public function getTo()
    {
        return $this->to;
    }
    
    public function getTransportType()
    {
        return $this->transportType;
    }
    
}