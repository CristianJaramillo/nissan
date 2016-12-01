<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 |
 | HomeController
 |
 */
Route::get('/', 'HomeController@home')->name('home');

Route::get('/sign-up', 'HomeController@signUp')->name('sign-up');

/*
 |
 | ClientController
 |
 */
Route::get('/client', 'ClientController@client')->name('client');

Route::post('/client', 'ClientController@ClientStore')->name('client.store');

Route::get('/client/{id_cliente}', 'ClientController@clientShow')->name('client.show');

Route::get('/client/{id_cliente}/car/{num_placa}', 'ClientController@clientCarShow')->name('client.car.show');

Route::post('/client/{id_cliente}/car', 'ClientController@clientCarStore')->name('client.car.store');


/*
 |
 | ServiceController
 |
 */
Route::get('/service', 'ServiceController@service')->name('service');

/*
 |
 | AppointmentController
 |
 */
Route::get('/appointment', 'AppointmentController@appointment')->name('appointment');

Route::post('/appointment', 'AppointmentController@appointmentStore')->name('appointment.store');

Route::get('/appointment/{id_cita}', 'AppointmentController@appointmentShow')->name('appointment.show');

Route::post('/appointment/{id_cita}/service', 'AppointmentController@appointmentServiceStore')->name('appointment.service.store');

/*
 |
 | StoreProcedureController
 |
 */
Route::get('/store/procedure/total/cita/{id_cita}', 'StoreProcedureController@totalCita')->name('store.procedure.total.cita');

Route::get('/report', 'StoreProcedureController@reportByRangeDate')->name('store.procedure.report');

Route::post('/report', 'StoreProcedureController@reportByRangeDate')->name('store.procedure.report.show');

