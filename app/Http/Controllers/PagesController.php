<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	    public function home() {
	    	$messages = [
	    		[
	    			'id' => 1,
	    			'content' => 'Primer Comentario',
	    			'image'=> 'https://www.anipedia.net/imagenes/que-comen-los-perros.jpg',
	    		],
	    		[
	    			'id' => 2,
	    			'content' => 'Segundo Comentario',
	    			'image'=> 'https://www.anipedia.net/imagenes/que-comen-los-perros.jpg',
	    		],
	    		[
	    			'id' => 3,
	    			'content' => 'Tercer Comentario',
	    			'image'=> 'https://www.anipedia.net/imagenes/que-comen-los-perros.jpg',
	    		],
	    		[
	    			'id' => 4,
	    			'content' => 'Cuarto Comentario',
	    			'image'=> 'https://www.anipedia.net/imagenes/que-comen-los-perros.jpg',
	    		],
	    	];

	    return view('welcome', [
	    	'messages' => $messages,
	    ]);
	    	
   	}

   	public function aboutUs()
   	{
   		return view('about');
   	}
}
