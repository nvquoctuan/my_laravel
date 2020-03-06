<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($role)
    {
    	echo "<br> Test Controller -- role: {$role}";
    }
}
