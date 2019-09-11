<?php


class Pen extends Stationery
{

    var string $color;
    var string $companyName;
    var bool $transparent ;

    public function __clone()
    {
        parent::__clone();
        $this->color = $this->color;
        //The companyName of the pen remains the same. Therefore we leave the reference to the existing object
        $this->transparent = $this->transparent;
    }


}