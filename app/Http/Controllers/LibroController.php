<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libros;

class LibroController extends Controller
{
    public function inicio(){

    	$libros = Libros::orderBy('id', 'DESC')->paginate(5);
    	return view('libros.inicio', ["libros" => $libros]);
    }

    public function crear(){
    	return view('libros.crear');
    }

    public function guardar(Request $request){
    	// dd($request);
    	 $this->validate($request,['nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);
        Libros::create($request->all());
    	return redirect()->route('libros.index')->with('success','registro creado!');
    }

    public function actualizar(Request $request, $id){

        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']); 
        libros::find($id)->update($request->all());
        return redirect()->route('libros.index')->with('success','Registro actualizado satisfactoriamente');
    }

    public function editar($id){
        //dd("entra aca!");
        $libros = Libros::find($id);
        return view('libros.editar', ['libro'=> $libros]);
    }

    public function eliminar($id){
        $libros = Libros::find($id)->delete();
        return redirect()->route('libros.index')->with('success','Registro borrado exitosamente!');
    }
}

