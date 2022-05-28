<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerExample extends Controller
{
    public function content () 
    {
        return '<style>.teste {background-color: blue;color: white;}</style>  <div class="teste" >texto</div>';
    }

    public function contentCatch () 
    {
        return '<style>.teste {background-color: green;color: white;}</style>  <div class="teste" >texto</div>';

    }

    public function contentCatch_View () 
    {
        return view('teste');
    }
}
