<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Profile as Profile;

abstract class Controller extends BaseController {

    use DispatchesCommands,
        ValidatesRequests;
}

class TestController extends Controller {

    public function index() {
        return 'Saimok Test Controller';
    }

}

class TempController extends Controller {

    public function getIndex() {
        return view('test');
    }

}

class ProfileController extends Controller {

    public function getIndex() {
        header('content-type:text/html; charset=utf-8');
//        $profile = Profile::get();
        $profile = Profile::where('id','1')->get();
//        $profile = Profile::where('id','1')->first();
//        return $profile ? 'Model Profile Connect Yes!' : 'Error! Model Profile Connect False!!!';
        if ($profile) {
            return 'Model Profile Connect Yes!';
        } else {
            return 'Error! Model Profile Connect False!!!';
        }
    }

}
