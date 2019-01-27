<?php
namespace App\Http\Controllers;
use App\Creator;
use App\Game;
use Illuminate\Http\Request;
use App\Genre;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function searchGames()
    {
        $search = Input::get('search');
        $game = Game::where('GameName', 'LIKE', '%' . $search . '%')->get();
        if (count($game) > 0)
            return view('games.search')->withDetails($game)->withQuery($search);
        else return view('games.search')->withMessage('There are no games with that name.You can try again! ');
    }

    public function searchCreators()
    {
        $search = Input::get('search');
        $creator = Creator::where('creatorName', 'LIKE', '%' . $search . '%')->get();
        if (count($creator) > 0)
            return view('creators.search')->withDetails($creator)->withQuery($search);
        else return view('creators.search')->withMessage('There are no creators with that name.You can try again! ');
    }

    public function searchGenres()
    {
        $search = Input::get('search');
        $genre = Genre::where('GenreName', 'LIKE', '%' . $search . '%')->get();
        if (count($genre) > 0)
            return view('genres.search')->withDetails($genre)->withQuery($search);
        else return view('genres.search')->withMessage('There are no genres with that name.You can try again! ');
    }
}

