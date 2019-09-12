<?php


class Pen extends Stationery
{
    //it's supposed that php7.4 supports the Scalar Type Declarations but it didn't work in the browser
    var /*string*/ $color;
    var /*string*/ $companyName;


    public function __construct($description, $owner, $purchaseDate, $color, $companyName)
    {
        parent::__construct($description, $owner, $purchaseDate);
        $this->color = $color;
        $this->companyName = $companyName;

    }



    public function __clone()
    {
        parent::__clone();
        $this->color = $this->color;
        //The companyName of the pen remains the same. Therefore we leave the reference to the existing object

    }

    //getters
    public function getColor(): string   {return $this->color;}
    public function getCompanyName(): string    {return $this->companyName;}


    //setters
    public function setColor(string $color): void   {$this->color = $color;}
    public function setCompanyName(string $companyName): void   {$this->companyName = $companyName;}



}