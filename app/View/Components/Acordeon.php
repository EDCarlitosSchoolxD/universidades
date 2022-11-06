<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Acordeon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     *

     */

     public $numero;
     public $titulo;
     public $contenido;

    public function __construct($titulo,$contenido,$numero)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->numero = $numero;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.acordeon');
    }
}
