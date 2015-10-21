<?php

namespace App\Modules\Article\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller {
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
        return view('article::home');
    }

    /**
     * Show detail screen to the user.
     *
     * @return Response
     */
    public function detail($id) {
        return view('article::home');
    }
}
