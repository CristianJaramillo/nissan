<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auto;
use App\Cita;
use App\Cliente;
use App\DetalleCita;
use App\Servicio;


class HomeController extends Controller
{
    
	public function home()
	{
		return view('home');
	}

	public function signUp()
	{
		return view('sign-up');
	}

}
