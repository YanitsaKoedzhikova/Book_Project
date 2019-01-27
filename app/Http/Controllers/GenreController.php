<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $GenreModel = new Genre();
        $allGenres = $GenreModel::all();


        return view( 'genres.index')->with('allGenres', $allGenres);
    }

    public function create()
    {
        return view( 'genres.create');
    }

    public function store(Request $request)
    {
        $rules = array (
            'GenreName' => 'bail||required|min:3|max:150',
            'Description' =>  'bail||required|min:3|max:350',

        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('genres/create')->WithErrors($validator);
        } else {
            $genre = new Genre([
                'GenreName' => $request->get('GenreName' ),
                'Description' => $request->get('Description'),

            ]);
            $genre->save();
            return redirect('genres');
        }
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        return view('genres.show', compact('genre', 'id'));
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genres.edit', compact('genre', 'id'));
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        $genre->GenreName = $request->get('GenreName');
        $genre->Description = $request->get('Description');
        $genre->save();
        return redirect('genres')->with('success', 'Task was successful');
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect('genres')->with('success','Genre has been deleted');
    }
}
