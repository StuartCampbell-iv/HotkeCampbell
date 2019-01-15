<?php

class clsEvent
{
   protected $dateAndTime;
   protected $desc;
   
    public function __construct($dateAndTime, $desc)
    {
        $this->dateAndTime = $dateAndTime;
        $this->desc = $desc;
    }
    
    public function getDateAndTime()
    {
        return $this->dateAndTime;
    }
    
    public function getDesc()
    {
        return $this->desc;
    }
   
    public function getDay()
    {
        return $this->dateAndTime->format("d");
    }
    
    public function getMonth()
    {
        return $this->dateAndTime->format("m");
    }
    
    public function getYear()
    {
        return $this->dateAndTime->format("y");
    }
    
    public function getTime()
    {
        return $this->dateAndTime->format("h:i");
    }
}



?>