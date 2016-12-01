<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

class ServiceController extends Controller
{
    public function service()
	{

		$servicios = Servicio::all();

		return view('service', compact('servicios'));
	}
}
