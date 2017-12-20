<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	    public function home() {
	    	$links = [
			'https://github.com/hanmiton/laravel' => 'Código Laravel',
			'https://laravel.com' => 'Pagina de Laravel'
		];

	    return view('welcome', [
	    	'topic' => 'DISEÑO E IMPLEMENTACIÓN DE SISTEMA PARA EL CONTROL DE AGENDAMIENTO E HISTORIAL CLÍNICO DE ANIMALES EN EL CENTRO VETERINARIO SAN MARTÍN',
	    	'links' => $links,
	    ]);
   	}

   	public function aboutUs()
   	{
   		return view('about');
   	}
}
