<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FirstHelper;
use SecondCH;

class ClassHelperController extends Controller
{
    public function First()
    {
    	return FirstHelper::chFirst();
    }

    public function Second()
    {
    	return SecondCH::secondCH();
    }
}
