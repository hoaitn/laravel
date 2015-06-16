<?php namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

    function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $data = array(
            'header_title' => 'Members',
            'action_title' => 'List',
            'ajax_csrf_token' => true
        );
        return View('backend.user.index', $data);
    }

    /**
     * Get all user in system
     * @return json
     */
    public function all() {
        // retrieve all users
        $users = User::all()->toJson();
        return response()->json($users);
    }

    /**
     * Set user status to block/unblock
     * @param  Request $request
     * @return Json
     */
    public function changeBlockStatus(Request $request) {

        try {
            $user = User::find($request['user_id']);
            if($user->blocked)
            	$user->blocked = 0;
            else
            	$user->blocked = 1;
            $user->save();

            $data = array(
                'status' => 'success',
                'blocked' => $user->blocked ? true : false,
                'verified' => $user->verified,
                'code' => 200
            );
        }
        catch(Exception $e) {
            $data = array(
                'status' => 'error',
                'code' => 600,
                'message' => 'You dont have permission'
            );
        }

        return response()->json($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //


    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //


    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //


    }
}
