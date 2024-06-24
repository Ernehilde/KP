<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataViewController extends Controller
{
    public function index(){
        return view("items.create-items");
    }
}
