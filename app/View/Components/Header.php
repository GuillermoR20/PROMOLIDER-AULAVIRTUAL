<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{

    public $name, $email;


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    public function render()
    {
        return view('general.header');
    }
}
