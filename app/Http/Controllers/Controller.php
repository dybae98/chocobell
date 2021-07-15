<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\manchas2;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests; 
	public function elchoco(){
		
		return json_encode(manchas2::all());
	
	}

	public function agregar(Request $R){
		$ares = new manchas2();
		$ares->sabor = $R->sabor;
		$ares->precio = $R->precio;
		$ares->id = $R->id;
		$ares->origen = $_SERVER["SERVER_ADDR"];
		$ares->save();

		return manchas2::all();
	}
}
