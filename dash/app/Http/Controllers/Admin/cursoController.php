<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\curso;

class cursoController extends Controller
{
    public function index (){
        $registros = curso::all();    
        return view('admin.cursos.index', compact('registros'));
    }
    public function adicionar (){
        return view('admin.cursos.adicionar');
    }
    public function salvar (Request $req){
        $dados = $req->all();    

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else {
            $dados['publicado'] = 'nao';           
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";
            $ext = $imagem->guessClientExtension();
            $nomeImg = "imagem".$num . ".". $ext;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir . "/" . $nomeImg;
        }

        curso::create($dados);

        return redirect()->route('admin.cursos');
    }
    public function editar ($id){
        $registro = curso::find($id);

        return view('admin.cursos.editar', compact('registro'));
    }
    public function atualizar (Request $req, $id){
        $dados = $req->all();    

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else {
            $dados['publicado'] = 'nao';           
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";
            $ext = $imagem->guessClientExtension();
            $nomeImg = "imagem".$num . ".". $ext;
            $imagem->move($dir, $nomeImg);
            $dados['imagem'] = $dir . "/" . $nomeImg;
        }

        curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }
    
    public function deletar ($id) {
        curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
