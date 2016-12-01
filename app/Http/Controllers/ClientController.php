<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Cliente, Auto};

class ClientController extends Controller
{
    public function client()
	{

		$clientes = Cliente::all();

		return view('client', compact('clientes'));
	}

	public function ClientShow(Request $request, $id_cliente)
	{
		$cliente = Cliente::find($id_cliente);	

		return view('client-show', compact('cliente'));
	}

	public function ClientCarShow(Request $request, $id_cliente, $num_placa)
	{
		$autos = Auto::where([
				'id_cliente' => $id_cliente,
				'num_placa' => $num_placa
			])->get();

		if($autos->count() >= 1)
		{
			$auto = $autos->first();

			return view('client-car-show', compact('auto'));
		}

		return redirect()->route('client.show', $id_cliente);
	}

	public function ClientCarStore(Request $request, $id_cliente)
	{
		
		$car = Auto::create([
			'num_placa' => $request->input('num_placa'),
			'nombre_auto' => $request->input('nombre_auto'),
			'color_auto' => $request->input('color_auto'),
			'id_cliente' => $id_cliente
		]);

		return redirect()->route('client.show', $id_cliente);
	}

	public function ClientStore(Request $request)
	{
		$client = Cliente::create([
			'nombre_cliente' => $request->input('nombre_cliente'),
			'direc_cliente' => $request->input('direc_cliente'),
			'tel_cliente' => $request->input('tel_cliente')
		]);	

		return redirect()->route('client.show', $client->id_cliente);
	}
}
