<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TestApiController extends Controller
{
    //
    public function test()
    {
    	$data =Student::paginate(1);
    	return $data;
    }
}
