<?php 
namespace App\Http\Controllers\User\Backend;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Http\Model\User\UserModel as UserModel; 

use DB;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Admin Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the user list at backend.
	 *
	 * @return Response
	 */
	public function index()
	{  
            $users = DB::table('users')->get();            
            return view('user.backend.index',['users' => $users]);
	}
        /**
	 * Show the add user at backend.
	 *
	 * @return Response
	 */
	public function create()
	{            
            return view('user.backend.create');
	}
        /**
	 * Show the edit user at backend.
	 *
	 * @return Response
	 */
	public function edit()
	{            
            return view('user.backend.edit');
	}
}
