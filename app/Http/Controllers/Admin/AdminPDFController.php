<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPDFController extends Controller
{
    public function showPrintForm()
    {
        return view('admin.items.print_form');
    }
}
