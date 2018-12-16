<?php
namespace App\CustomClasses;
use App\Interfaces\IOperations as IOperations;

class Addiction implements IOperations
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
            return $this->a+$this->b;
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
            $this->ErrorMsg .= "You should provide 2 numbers";
            $flag=false;
        }
        return $flag;
    }
}
?>