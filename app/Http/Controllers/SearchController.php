<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchGames(){
    $q = Input::get('q');
    $game = House::where('gamesName','LIKE','%'.$q.'%')->get();
    if(count($game)>0)
        return view('games.search')->withDetails($game)->withQuery($q);
    else return view('games.search')->withMessage('No detail found. Try to search again!');
    }
    public function searchCreators(){
        $q = Input::get('q');
        $creator = House::where('creatorName','LIKE','%'.$q.'%')->get();
        if(count($creator)>0)
            return view('creator.search')->withDetails($creator)->withQuery($q);
        else return view('creator.search')->withMessage('No detail found. Try to search again!');
    }

    public function searchGenres(){
        $q = Input::get('q');
        $type = genre::where('genreType','LIKE','%'.$q.'%')->get();
        if(count($type)>0)
            return view('genres.search')->withDetails($type)->withQuery($q);
        else return view('genres.search')->withMessage('No detail found. Try to search again!');
    }
}
