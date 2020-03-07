<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function access(Request $request){
    	if($request->session()->has('test_session')){
    		echo $request->session()->get('test_session');
    	}
    	else
    		echo "no session";
    }

    public function store(Request $request){
    	$request->session()->put('test_session', '1');
    	echo "session put success";
    }	

    public function delete(Request $request){
    	$request->session()->forget('test_session');
    	echo "session delete success";
    }
}
