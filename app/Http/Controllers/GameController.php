<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GameController extends Controller
{

    public function index()
    {
        $GameModel = new Game();
        $allGames = $GameModel::all();


        return view( 'games.index')->with('allGames', $allGames);
    }
    public function create()
    {
        return view( 'games.create');
    }

    public function store(Request $request)
    {
        $rules = array (
            'GameName' => 'bail||required|min:3|max:150',
            'ReleaseDate'=>'required',
            'Creator'=>'required|min:3|max:150',
            'Genre'=>'required|min:3|max:100',
            'Description' =>  'bail||required|min:3|max:350',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('games/create')->WithErrors($validator);
        } else {
            $game = new Game([
                'GameName'=> $request->get('GameName'),
                'ReleaseDate'=> $request->get( 'ReleaseDate'),
                'Creator'=> $request->get('Creator'),
                'Genre'=> $request->get('Genre'),
                'Description' => $request->get('Description'),

            ]);
            $game->save();
            return redirect('games');
        }
    }


    public function show($id)
    {
        $game = Game::find($id);
        return view('games.show', compact('game', 'id'));
    }

    public function edit($id)
    {
        $game = Game::find($id);
        return view('games.edit', compact('game', 'id'));
    }

    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        $game->GameName = $request->get('GameName');
        $game->ReleaseDate = $request->get('ReleaseDate');
        $game->Creator = $request->get('Creator');
        $game->Genre = $request->get('Genre');
        $game->Description = $request->get('Description');
        $game->save();
        return redirect('games')->with('success', 'Task was successful');
    }

    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();

        return redirect('games')->with('success','Game has been deleted');
    }
}
