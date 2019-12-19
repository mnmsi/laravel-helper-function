<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index()
    {
    	echo random_code();
    }

    public function anotherhelper()
    {
    	echo test();
    }

    function third()
    {
    	return third();
    }

    
}
