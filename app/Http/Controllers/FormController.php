<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $data = form::orderBy('fullname', 'asc')->paginate(5);
        return view('form/table')->with('data', $data);
    }
    public function detail($id)
    {
        $data = form::where('id', $id)->first();
        return view('form/detail')->with('data', $data);
    }
}
