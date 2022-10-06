<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class PropertiController extends Controller
{
    public function index()
    {
        $all = Upload::all();
        return view('users.index', compact('all'));
    }
    public function view($id)
    {
        $all = Upload::find($id);
        return view('users.detail-property', compact(['all']));
    }
}