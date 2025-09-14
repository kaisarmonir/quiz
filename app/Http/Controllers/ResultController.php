<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\result;
use App\Models\count;

class ResultController extends Controller
{
    public function index(){
        $results=Result::latest()->paginate(20);
        return view('result', compact('results'));
    }

}
