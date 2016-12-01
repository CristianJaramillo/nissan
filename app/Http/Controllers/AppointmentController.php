<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Cita, Servicio, DetalleCita};

class AppointmentController extends Controller
{
    public function appointment()
	{
		$citas = Cita::all();

		return view('appointment', compact('citas'));	
	}

	public function appointmentStore(Request $request)
	{
		$cita = Cita::create([
			'num_placa' => $request->input('num_placa'),
			'fecha' => $request->input('fecha')
		]);

		return redirect()->route('appointment.show', $cita->id_cita);
	}

	public function appointmentShow(Request $request, $id_cita)
	{
		$cita = Cita::find($id_cita);
		$servicios = Servicio::all();
		return view('appointment-show', compact('cita', 'servicios'));	
	}

	public function appointmentServiceStore(Request $request, $id_cita)
	{

		try {
			DetalleCita::create([
				'id_cita' => $id_cita,
				'id_servicio' => $request->input('id_servicio'),
				'obser_servicio' => $request->input('obser_servicio')
			]);		
		} catch(\PDOException $e){
			
		} catch(\QueryException $e) {

		} catch(Exception $e) {
			
		}

		return redirect()->route('appointment.show', $id_cita);	
	}
}
