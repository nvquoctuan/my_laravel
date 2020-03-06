<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
    	echo "index";
    }

    public function create(){
    	echo "create";
    }

    public function store(Request $request){
    	echo "store";
    }

    public function show(){
		echo "show";
    }

    public function edit(){
    	echo "edit";
    }

    public function update(){
    	echo "update";
    }

    public function destroy(){
    	echo "destroy";
    }
}
