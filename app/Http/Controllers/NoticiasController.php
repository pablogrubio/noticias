<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ausi\SlugGenerator\SlugGenerator;
use Ausi\SlugGenerator\SlugOptions;
use PHPMailer\PHPMailer;

class NoticiasController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/

	public function home()
	{
		$noticias = \App\Noticia::orderBy('id','desc')->get();
		return view('home',compact('noticias'));
	}


public function verNoticia($id)
	{

		$noticia = \App\Noticia::find($id);
		return view('ver-noticia',compact('noticia'));

	}





}
