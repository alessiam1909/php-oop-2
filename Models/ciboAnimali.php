<?php

class ciboAnimali extends Prodotti
{
    public $weight;

    public function __construct($title, $race, $price, $image, $weight)
    {
        parent::__construct($title, $race, $price, $image);
        $this->weight = $weight;
        
    }
}