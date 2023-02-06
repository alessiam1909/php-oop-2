<?php

class giochiAnimali extends Prodotti
{
    public $description;

    public function __construct($title, $race, $price, $image, $description)
    {
        parent::__construct($title, $race, $price, $image);
        $this->description = $description;
    }
}