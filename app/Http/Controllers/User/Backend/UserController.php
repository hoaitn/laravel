<?php 
namespace App\Http\Controllers\User\Backend;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User as User; 

use DB;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Admin Controller
	|--------------------------------------------------------------------------
	*/
        private $_userModel;        
        
        /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
            $this->middleware('auth');
            //Init Entity Model
            $this->_userModel = new User();            
	}

	/**
	 * Show the user list at backend.
	 *
	 * @return Response
	 */
	public function index()
	{              
            //Get all users
            $users = $this->_userModel->all();
            //Response view
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
	public function edit($id)
	{            
            return view('user.backend.edit');
	}
        /**
	 * Show the edit user at backend.
	 *
	 * @return Response
	 */
	public function delete($id)
	{            
            return view('user.backend.edit');
	}
        /**
	 * Show the user profile at backend.
	 *
	 * @return Response
	 */
	public function profile($id)
	{            
            return view('user.backend.profile');
	}
}
