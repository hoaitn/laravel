<?php

namespace App\Modules\Test\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use View;
use App\Modules\Test\Models\Test as Test;

class AdminTestController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | User Admin Controller
      |--------------------------------------------------------------------------
     */

    private $_entityModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->_entityModel = new Test();
    }

    /**
     * Show the index screen to the user.
     *
     * @return Response
     */
    public function index() {
        //List all test
        $data = $this->_entityModel->all();

        return View::make('test::admin.home', array('data' => $data))->render();
    }

    /**
     * Show the edit screen to the user.
     *
     * @return Response
     */
    public function edit(Request $request, $id) {
        //Get data
        if ($id) {
            $data = $this->_entityModel->find($id);
        }
        //Update data
        if ($request->method() == 'POST') {
            $data->title = $request->input('title');
            $data->description = $request->input('description');
            $data->detail = $request->input('detail');
            $data->updated_at = time();
            $data->save();
        }
        return View::make('test::admin.edit', ['data' => $data])->render();
    }

    /**
     * Show the create screen to the user.
     *
     * @return Response
     */
    public function create(Request $request) {        
        //Update data
        if ($request->method() == 'POST') {            
            $data = new Test();
            $data->title = $request->input('title');
            $data->description = $request->input('description');
            $data->slug = $request->input('slug');
            $data->detail = $request->input('detail');            
            $data->save(); 
            return redirect("admin/test/edit/{$data->id}")->with('data', $data);            
        }else{            
            return View::make('test::admin.create');
        }        
    }
    /**
     * Show the delete screen to the user.
     *
     * @return Response
     */
    public function delete($id) { 
         //Get data
        if ($id) {
            //Get data by ID
            $data = $this->_entityModel->find($id); 
            if($data->delete()){ 
                return response()->json(['status' => true]);
            }
        }        
    }
}
