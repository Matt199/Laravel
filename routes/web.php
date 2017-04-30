<?php
use App\Barometric;
use App\Humidity;
use App\Solarradiaton;
use App\Sunrise;
use App\sunset;
use App\Temp;
use App\Voltage;
use App\Wind;
use App\Winddirection;
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

Route::get('/', function () {
    $start = 1475215718;
    $end = 1475315718;

    $winds = Wind::where('time_stamp', '>', $start)->where('time_stamp', '<', $end)->get();


    return View::make('dashborad',array('winds' => $winds));
});
Route::get('/api', function () {

    $voltages= Voltage::orderBy('ID', 'DESC')->paginate(30);
    $voltages = $voltages->sortBy('ID');
    #$voltages = DB::table('voltages')->orderBy('ID', 'desc')->paginate(300);
    #print_r($voltages);
    #print_r( $voltages['data']);
    #echo("test");
    return View::make('wykres',array('voltages' => $voltages));
});

Route::get('/api_json', function () {

    #$voltages= Voltage::orderBy('ID', 'desc')->paginate(300);
    #$voltages = DB::table('voltages')->orderBy('ID', 'desc')->paginate(300);
    #print_r($voltages);
    #print_r( $voltages['data']);
    #return View::make('wykres',array('voltages' => $voltages));
    #print_r(json_decode($voltages));

    #return response()->json($voltages);
});
Route::get('/api_json2', function () {

    $voltages= Voltage::orderBy('ID', 'DESC')->paginate(30);
    $voltages = $voltages->sortBy('ID');
    #$voltages = DB::table('voltages')->orderBy('ID', 'desc')->paginate(300);
    #print_r($voltages);
    #print_r( $voltages['data']);
    return View::make('test',array('voltages' => $voltages));
});