<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class loginController extends Controller
{
    public function index(){
        return view ('login.index');
    }
    
    public function entrar(Request $req){
        $dados = $req->all();

        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])){
           return redirect()->route('admin.cursos');
        }
        // redirect()->route('site.home');
    }
    public function sair (){
        Auth::logout();
        return redirect()->route('site.home');        
    }
}
