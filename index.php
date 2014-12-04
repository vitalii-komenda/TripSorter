<?php

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
spl_autoload_register('autoload');


$boardingCards = [
    [
        'transport_type' => 'train',
        'number' => '78A',
        'from' => 'Madrid',
        'to' => 'Barcelona',
        'seat' => '45B'
    ],
    [
        'transport_type' => 'airport bus',
        'from' => 'Barcelona',
        'to' => 'Gerona Airport'
    ],
    [
        'transport_type' => 'flight',
        'number' => 'SK455',
        'from' => 'Gerona Airport',
        'to' => 'Stockholm',
        'gate' => '45B',
        'seat' => '3A',
        'baggage' => 'drop at ticket counter 344'
    ],
    [
        'transport_type' => 'flight',
        'number' => 'SK22',
        'from' => 'Stockholm',
        'to' => 'New York JFK',
        'gate' => '22',
        'seat' => '7B',
        'baggage' =>  'will we automatically transferred from your last leg'
    ] 
];

shuffle($boardingCards);

$tripSorter = new App\TripSorter();
$sorted = $tripSorter->sort($boardingCards);
var_dump($sorted);
$formatter = new App\Formatter\Formatter();
var_dump($formatter->render($sorted));