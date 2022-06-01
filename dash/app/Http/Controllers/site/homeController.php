<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\curso;

class homeController extends Controller
{
    public function index(){
        $cursos = curso::paginate(3);
        return view('home', compact('cursos'));
    }
}
