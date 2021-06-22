<?php 
namespace Arcos\Main;


class Printer
{   
    /**
     * @var array
     */
    private $dictionary;

    public function __construct() {
        $this->dictionary = [15=>'Integraciones',5=>'IT', 3=>'Falabella'];
    }
    
    /**
     * print output 
     */
    public function run(){
        for ($i=1; $i <= 100; $i++) { 
            echo $this->getOutput($i). "\n";
        }
    }
        
    /**
     * return the correct output for the number
     * @param  int $num
     * @return mixed
     */
    public function getOutput($num)
    {
        foreach ($this->dictionary as $key => $value) {
            if($num % $key == 0){
                return $value;
            }
        }
        return $num;
    }
}

