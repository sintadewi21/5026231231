<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //JANGAN LUPA YA KALO BIKIN CONTROLLER PAKE TERMINAL, MISAL : php artisan make:controller BlogController

	public function home(){
        //nah ini kan filenya udah di floder blog ya, jadi tambahin blog/ buat masuk ke folder
		return view('blog/home');
	}

	public function tentang(){
		return view('blog/tentang');
	}

	public function kontak(){
		return view('blog/kontak');
	}

}

