<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
class OpdrachtController extends Controller
{
    public function opdracht()
    {
        $fruits = Fruit::all();
        return view('opdracht.opdracht', ['fruits' => $fruits]);
    }
}
