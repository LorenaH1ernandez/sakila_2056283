<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CategoriaController extends Controller
{
    //los controllers se componen de acciones 
    //acciones =metodos
    //pueden tener el nombre deseado tratar de que no sean mayusculos 
    //selecciona datos atraves del modelo 
    public function index(){
        $categorias = Categoria::paginate(5);
        return view("categorias.index")->with("categorias" , $categorias);

    }
    public function create(){
        return view("categorias.new");
    }
    //para guardar la categoria que viene desde formulario
    public function store(){
        $reglas =[
            "categorias" => ["required","alpha","min:4","unique:category,name"]
        ];
        $mensajes =[
            "required" => "Campo obligatorio",
            "alpha"=> "Solo letras",
            "min" => "Categorias de :min caracteres",
            "unique"=> "Categoria repetida"
        ];
        $validador = Validator::make($_POST,$reglas,$mensajes);

        //con los datos a validar y las reglas
        //hacer comparacion de reglas
        if($validador->fails()){
          //la validacion fallo?
          //redirigir al formulario con los mensajes de error
          return redirect("categorias/create") ->withErrors($validador)->withInput();

        }else{
         //reglas de validacion para los campos en el formulario
        //$_POST,es un arreglo incorporado en php
        //es donde quedan almacenados los datos de un formulario
        //crear el objeto categoria
        $categoria = new Categoria;
        //asignarle el nombre
       $categoria->name=$_POST["categoria"];
        //guardar
        $categoria->save();
        //letrero de exito:por medio de un redireccionamiento
        //redireccionamos a rutas que tengamos 
        return redirect('categorias/create') ->with("exito","Categoria registrada");
        
    }
}
    public function edit($idcategoria){
    $categoria = Categoria::find($idcategoria);
    return view('categorias.edit')->with("categoria", $categoria);
    }
        //guardar la actualizacion
        public function update(){
            //seleccionar categoria a editar
            $categoria = Categoria::find($_POST["id"]);
            //actualizar atributos
            $categoria->name=$_POST["categoria"];
            //guardar cambios
            $categoria->save();
            echo "cambios guardados";
        }
    
}

