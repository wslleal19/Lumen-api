<?php

namespace App\Http\Controllers\Api;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use DB;

class ApiController extends BaseController{

	use Helpers;

	// Examples
	public function getUser(Request $request){
		$dados = $request->all();

		$query = DB::table('users')->where('id', $dados['user_id'])->first();
		return response()->json(array(
				'status' => true,
				'message' => 'User',
				'response' => $query
		));
	}

	public function getAllUsers(Request $request){

		$query = DB::table('users')->get();
		return response()->json(array(
				'status' => true,
				'message' => 'User',
				'response' => $query
		));
	}

}