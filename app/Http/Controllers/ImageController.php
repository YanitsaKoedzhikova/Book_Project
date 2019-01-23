<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageUpload;

class ImageController extends Controller
{

    public function index()
    {
        $images = Image::all();
        return view('images.index') ->with('images', $images);
    }

    public function create()
    {
        return view('images.create');
    }


    public function store(Request $request)
    {
        $path = $request->file('customImage')->store('public/sample-image');
        $image = new Image([
            'fileName' => basename($path),
            'imageDescription' => $request->get('imageDescription')
        ]);
        $image->save();
        return redirect('images');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        Storage::delete('public/sample-images/' .$image->fileName);
        $image->delete();

        return redirect('images')->with('success', 'Image was deleted!');
    }
}
