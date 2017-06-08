<?php

/**
*
*/
class ApiController extends Controller
{
	public function users()
	{
		return Response::toJson(User::all());
	}

	public function user($username)
	{
		$user =  User::where('username', $username)->first();

		if($user)
		{
			return Response::toJson($user);
		}
		else {
			return Response::toJson(['status' => 400, 'message' => 'Usuario '.$username.' no encontrado']);
		}
	}
}
