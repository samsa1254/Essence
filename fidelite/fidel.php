<?php


class fidel
{
    private $FID;
    private $score;
    private $idc;
    private $promotion;
    

    function __construct($FID,$score,$idc,$promotion)
    {
        $this->FID=$FID;
        $this->score=$score;
        $this->idc=$idc;
        $this->promotion=$promotion;
    }

/*GET*/
    
    public function getFID()
    {
        return $this->FID;
    }

    
    public function getscore()
    {
        return $this->score;
    }

   
    
    public function getidc()
    {
        return $this->idc;
    }

     public function getpromotion()
    {
        return $this->promotion;
    }

   
/*SET*/
    
    public function setFID($FID)
    {
        $this->FID = $FID;
    }

    
    public function setscore($score)
    {
        $this->score = $score;
    }

   
    public function setidc($idc)
    {
        $this->idc = $idc;
    }
    
     public function setpromotion($idc)
    {
        $this->promotion = $promotion;
    }
}