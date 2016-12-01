<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreProcedureController extends Controller
{

    public function totalCita(Request $request, $id_cita)
    {

    	try {
    		\DB::select('EXEC TotalCita @IdCita = ?', [$id_cita]);
    	} catch(\PDOException $e){
			
		} catch(\QueryException $e) {

		} catch(Exception $e) {
			
		}

    	return redirect()->route('appointment.show', $id_cita);
    }

    public function reportByRangeDate(Request $request)
    {

        $reports = null;

        if ($request->isMethod('post')) {
            $reports = \DB::select('EXEC CountServiceByRangeDate @StartDate = ?, @StopDate = ?', [
                $request->input('start_date'),
                $request->input('stop_date')
            ]);
        }

        return view('report', compact('reports'));
    }

}
