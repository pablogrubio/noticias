<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ausi\SlugGenerator\SlugGenerator;
use Ausi\SlugGenerator\SlugOptions;

class GestorController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}
  /**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/

public function gestor()
  {
    $noticia = \App\Noticia::orderBy('id','desc')->get();
    return view('gestor',compact('noticia'));
  }

	public function nuevaNoticia()
  	{
		return view('nueva-noticia');
	}



	public function borrarNoticia($id)
	{
		$borrar = \App\Noticia::find($id);
		unlink('storage/app/noticias/'.$borrar->imagen);

		$borrar->delete();
		return redirect('/gestor');
	}



public function actualizarNoticia(Request $request,$id)
	{

		$data=$request->all();
		$noticia = \App\Noticia::find($id);

		$noticia->titular=$data['titular'];
		$noticia->cuerpo=$data['cuerpo'];
		$noticia->estado = $data['estado'];
		$noticia->usuario= 	auth()->user()['id'];

		$noticia->save();

		return redirect('/gestor');
}



public function editarNoticia($id){
	$noticia= \App\Noticia::find($id);
	return view("editar-noticia",compact('noticia','id'));
}



public function guardaNoticia(Request $request)
	{
		$data=$request->all();
		$noticia= new \App\Noticia;

		$generator = new SlugGenerator((new SlugOptions)->setValidChars('a-z0-9')->setLocale('es')->setDelimiter('-'));


		$noticia->titular=$data['titular'];
		$noticia->cuerpo=$data['cuerpo'];
		$noticia->estado = $data['estado'];
		$noticia->usuario= 	auth()->user()['id'];

		$noticia->save();



		return redirect('/gestor');
	}



}
