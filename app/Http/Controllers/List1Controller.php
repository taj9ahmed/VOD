<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Controllers;
//use Auth;
// use List1;

class List1Controller extends Controller
{
    public function index(Request $request)
    {
        // echo $request->list_select;
        // dd($request->filmId);
        $cur_list = \App\List1::findOrFail($request->list_select);
        $cur_list->films_ids = $cur_list->films_ids . " &/& " .$request->filmId;
        $cur_list->save();
        // dd($cur_list);
        $films_ids = explode(" &/& ", $cur_list->films_ids);
        array_shift($films_ids);
        $films = array();
        foreach($films_ids as $film_id)
        {
            $oneFilm = "";
            $oneFilm = \App\Film::find($film_id);//\DB::select('select * from films where id="$film_id"');//
            array_push($films,$oneFilm);//dd($oneFilm);
        }
        
        return view( 'lists.show', compact('films')); 
        // $lists = \DB::select('select * from list1s');
        // return view('lists.index', compact('lists'));
    }
    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|unique:list1s'
        ]);
        // dd($validatedData);
        $newList = new \App\List1();
        $newList->name = $validatedData['name'];
        $newList->owner_id = \Auth::user()->id;//$validatedData['owner_id'];

        $newList->save();
        // dd(\Auth::user()->id);
        // $newlist = \App\List1::create(['name'=>$validatedData,'owner_id'=>(\Auth::user()->id)]);
        // dd(\Auth::user()->id);
        $lists = \DB::select('select * from list1s');
        return view('lists.index', compact('lists'));
    }

    public function create()
    {
        
        // $newlist->owner_id = Auth::user()->id;
        // $newlist->name = $request->name;
        // $newlist->save();
        return view('lists.newList');
    }

    public function add2List(Request $request)//$filmId, $listId)
    {
        $filmId = ($request->filmId);

        $list1s = \DB::select('select * from list1s');
        $lists = ['menus'=>$list1s,'filmId'=>$filmId];
        return view('lists.selectList', compact('lists'));

    }

    public function indexfav()//Request $request
    {

        dd($request);
        // $cur_list = \App\List1::findOrFail($listId);
        // $cur_list->films_ids = $cur_list->films_ids . "&/&" .$filmId;
        // return view( 'List1.show', compact(listId));    
    }

    public function show($listId)
    {
        $list1 = \App\List1::findOrFail($listId);
        // $list1 = explode(list1->films_ids,"&/&");
        return view('List1.show', compact('list1'));

    }
}
