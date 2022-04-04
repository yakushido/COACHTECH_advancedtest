<?php

namespace App\Http\Controllers;

use App\Models\advancedtest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TestController extends Controller
{
    public function index(){
        return view('index');
    }

    public function thanks(Request $request){
        $form = $request->all();
        advancedtest::create($form);
        return view('thanks');
    }
}
