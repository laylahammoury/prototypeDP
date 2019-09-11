<?php


class Stationery implements prototypeInterface
{
    var string $description;
    var string $owner;
    var DateTime $purchaseDate;
    //getters
    public function getDescription() : string     { return $this->description;}
    public function getOwner() : string     { return $this->owner;}
    public function getPurchaseDate() : string      { return $this->purchaseDate;}

    //setters
    public function setDescription($description)    {$this->description = $description;}
    public function setOwner($owner)    {$this->owner = $owner;}
    public function setPurchaseDate($purchaseDate)    {$this->purchaseDate = $purchaseDate;}

    function __clone()
    {
        $this->description = "Copy of " . $this->description;
        //The owner of the stationary remains the same. Therefore we leave the reference to the existing object
        $this->purchaseDate = new DateTime;
    }
}