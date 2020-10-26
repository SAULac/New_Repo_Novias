<?php namespace App\Controllers;

class contactoController extends BaseController
{
	public function index()
	{
		return view('contacto/inicio');
		
	}

	public function catalogo(){
		return view('contacto/catalogo');
		return view('contacto/menu');

	}
	public function menu(){
		return view('contacto/menu');


	}
	public function  precios(){
		return view('contacto/precios');


	}

}
