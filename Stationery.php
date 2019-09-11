<?php
include ("prototypeInterface.php");

class Stationery implements prototypeInterface
{
    //it's supposed that php7.4 supports the Scalar Type Declarations but it didn't work in the browser
    var /*string*/ $description;
    var /*string*/ $owner;
    var /*DateTime*/ $purchaseDate;

    public function __construct($description, $owner, $purchaseDate)
    {
        $this->description = $description;
        $this->owner = $owner;
        $this->purchaseDate = $purchaseDate;
    }

    function __clone()
    {
        $this->description = "Copy of " . $this->description;
        //The owner of the stationary remains the same. Therefore we leave the reference to the existing object
        $this->purchaseDate = new DateTime;
    }

    //getters
    public function getDescription() : string     { return $this->description;}
    public function getOwner() : string     { return $this->owner;}
    public function getPurchaseDate()       {return $this ->purchaseDate;}


    //setters
    public function setDescription($description)    {$this->description = $description;}
    public function setOwner($owner)    {$this->owner = $owner;}
    public function setPurchaseDate($purchaseDate)    {$this->purchaseDate = $purchaseDate;}

}