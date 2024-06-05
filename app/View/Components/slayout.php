<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class slayout extends Component
{
    
    public $heading;
    public $heading2;
    public $hpara;
    public $ch1;
    public $ch2;
    public $ch3;
    public $cpara1;
    public $cpara2;
    public $cpara3;
    

    public function __construct($heading,$heading2,$hpara,$ch1,$ch2,$ch3,$cpara1,$cpara2,$cpara3)
    {
        $this->heading = $heading;
        $this->heading2 = $heading2;
        $this->hpara = $hpara;        
        $this->ch1 = $ch1;
        $this->ch2 = $ch2;
        $this->ch3 = $ch3;
        $this->cpara1 = $cpara1;
        $this->cpara2 = $cpara2;
        $this->cpara3 = $cpara3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slayout');
    }
}
