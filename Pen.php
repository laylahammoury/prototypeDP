<?php


class Pen extends Stationery
{

    var string $color;
    var string $companyName;
    var bool $transparent ;

    public function __construct($description, $owner, $purchaseDate, $color, $companyName, $transparent )
    {
        parent::__construct($description, $owner, $purchaseDate);
        $this->color = $color;
        $this->companyName = $companyName;
        $this->transparent = $transparent;
    }



    public function __clone()
    {
        parent::__clone();
        $this->color = $this->color;
        //The companyName of the pen remains the same. Therefore we leave the reference to the existing object
        $this->transparent = $this->transparent;
    }

    //getters
    public function getColor(): string   {return $this->color;}
    public function getCompanyName(): string    {return $this->companyName;}
    public function isTransparent(): bool   {return $this->transparent;}

    //setters
    public function setColor(string $color): void   {$this->color = $color;}
    public function setCompanyName(string $companyName): void   {$this->companyName = $companyName;}
    public function setTransparent(bool $transparent): void {$this->transparent = $transparent;}


}