<?php

namespace App\Http\Controllers;

class PDFController extends Controller
{
    public function showPrintForm()
    {
        return view('items.print_form');
    }
}
