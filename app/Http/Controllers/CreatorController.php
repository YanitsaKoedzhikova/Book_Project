<?php

namespace App\Http\Controllers;

use App\Creator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreatorController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $CreatorModel = new Creator();
        $allCreators = $CreatorModel::all();


        return view( 'creators.index')->with('allCreators', $allCreators);
    }

    public function create()
    {
        return view( 'creators.create');
    }


    public function store(Request $request)
    {
        $rules = array (
            'CreatorName' => 'bail||required|min:3|max:150',
            'CreatingCompany'=>'required',
            'Description' =>  'bail||required|min:3|max:350',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('creators/create')->WithErrors($validator);
        } else {
            $creator = new Creator([
                'CreatorName' => $request->get('CreatorName' ),
                'CreatingCompany'=> $request->get( 'CreatingCompany'),
                'Description' => $request->get('Description'),

            ]);
            $creator->save();
            return redirect('creators');
        }
    }



    public function show($id)
    {
        $creator = Creator::find($id);
        return view('creators.show', compact('creator', 'id'));
    }


    public function edit($id)
    {
        $creator = Creator::find($id);
        return view('creators.edit', compact('creator', 'id'));
    }


    public function update(Request $request, $id)
    {
        $creator = Creator::find($id);

        $creator->CreatorName = $request->get('CreatorName');
        $creator->CreatingCompany = $request->get('CreatingCompany');
        $creator->Description = $request->get('Description');
        $creator->save();
        return redirect('creators')->with('success', 'Task was successful');
    }


    public function destroy($id)
    {
        $creator = Creator::find($id);
        $creator->delete();

        return redirect('creators')->with('success','Creator has been deleted');
    }
}
