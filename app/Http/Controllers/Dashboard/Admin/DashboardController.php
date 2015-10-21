<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Module;

class DashboardController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Dashboard Controller
      |--------------------------------------------------------------------------
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        $moduleManager = new \Qsoftvietnam\ModuleManager();
        $runCommand = new \Qsoftvietnam\ExecProcess('cd E:/project_base/laravel');       
        $runCommand->run();
        $status = $runCommand->isRunning();
        dump($status); 
        return view('dashboard.admin.index');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function generateModule(Request $request) {
        $params = $request->all();
        
        if ($request->method() == 'POST') {
            $moduleName = ucfirst($request->input('module-name'));
            $fieldData = $request->input('fieldData');
            $fieldName = $request->input('fieldName');
            $generator = new \Qsoftvietnam\Generator($moduleName,$fieldName);
            $generator->createModule();
            $generator->createModel($fieldName, $fieldData);
        }

        return view('dashboard.admin.generate');
    }
}
