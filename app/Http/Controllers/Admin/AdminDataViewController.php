<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDataViewController extends Controller
{
    public function index(){
        return view("items.create-items");
    }
}
