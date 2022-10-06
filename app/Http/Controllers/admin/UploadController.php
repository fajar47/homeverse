<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all = Upload::all();
        return view('admin.properties.properti', compact('all'));
    }

    public function create()
    {
        return view('admin.properties.properti-add');
    }
    public function store(Request $request)
    {
        Upload::create($request->except(['_token','submit']));
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
   
           ]);
        return redirect('/admin/properti');
    }
    
}
