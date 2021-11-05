<?php

namespace App\Http\Controllers;

use App\Models\File;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function uploadPage()
    {
        return view('uploadfile');
    }

    public function store(Request $request)
    {
        $data = new File();
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file = $filename;

        $data->name = $request->name;
        $data->description = $request->description;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = File::all();
        return view('showfile', compact('data'));
    }

    public function downloadFile(Request $request, $file)
    {
        return response()->download(public_path('assets/' . $file));
    }

    public function viewFile($id)
    {
        $data = File::find($id);
        return view('viewfile', compact('data'));
    }

    public function countWords()
    {
        return view('countWords');
    }
}
