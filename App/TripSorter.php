<?php
namespace App;


class TripSorter {

    protected $cards = [];
 
    public function sort($boardingCards)
    {
        foreach($boardingCards as $boardingCard) {
            $this->cards[$boardingCard->getFrom()] = $boardingCard;
        }
        return $this->_sort($this->cards);
    }
    
    protected function _sort($boardingCards)
    {
        $firstTrip = $this->findFirstTrip($boardingCards);
        $sorted = [$firstTrip];
        for($i = 0; $i < count($boardingCards); $i++) {
            $last = $sorted[$i];
            $nextTrip = $this->findNextTrip($boardingCards, $last->getTo());
            if($nextTrip) {
                $sorted[] = $nextTrip;
            }
        }
        
        return $sorted;
    }
    
    protected function findFirstTrip($boardingCards)
    {
        $from = [];
        $to = [];
        foreach($boardingCards as $boardingCard) {
            $from[] = $boardingCard->getFrom();
            $to[] = $boardingCard->getTo();
        }

        $first = array_diff($from, $to);
        if(!isset($boardingCards[current($first)])) {
            throw new \Exception('Cannot find first trip');
        }
        return $boardingCards[current($first)];
    }
    
    protected function findNextTrip($boardingCards, $to)
    {
        if(isset($boardingCards[$to])){
            return $boardingCards[$to];
        };
        return false;
    }

}