<?php

namespace App\Modules\Test\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller {
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
    public function __construct() {
        
    }

    /**
     * Show index screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view('test::home');
    }

    /**
     * Show detail screen to the user.
     *
     * @return Response
     */
    public function detail($id) {
        return view('test::home');
    }
}
