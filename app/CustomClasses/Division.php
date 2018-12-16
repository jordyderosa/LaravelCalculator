<?php
namespace App\CustomClasses;
use App\Interfaces\IOperations as IOperations;

class Division implements IOperations
{
    private $a;
    private $b;
    private $ErrorMsg;


    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function getResult()
    {
        if($this->validateNum())
        {
            return $this->a/$this->b;
        }
        else
           return $this->ErrorMsg;
    }

    private function validateNum()
    {
        $this->ErrorMsg="";
        $flag=true;
        if(!is_numeric($this->a) || !is_numeric($this->b))
        {
            $flag =false;
            $this->ErrorMsg .="Error: you should provide 2 numbers.";

        }
        if($this->b == 0)
        {
            $flag =false;
            $this->ErrorMsg .= "Divider should not be equal to 0";

        }
        return $flag;
    }
}


?>