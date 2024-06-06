<?php

namespace App\Http\Controllers;

use App\Models\Trainor;
use Illuminate\Http\Request;

class TrainorsController extends Controller
{
    public function index() 
    {
        $t = Trainor::orderBy('id')->get();

        return view('trainor.index', ['trainors' => $t]);
    }
}
