<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers;
//use Auth;
// use List1;

class List1Controller extends Controller
{
    public function index()
    {
        $lists = \DB::select('select * from list1s');
        return view('lists.index', compact('lists'));
    }
    public function insert(Request $request)
    {
        // dd($request->name);
        // dd(\Auth::user()->id);
        $owner_id = (\Auth::user()->id);
        $userId = \App\User::findOrFail($owner_id);
        // dd($userId->id);
        $newlist = \App\List1::create(['name'=>$request->name,'owner_id'=>($userId->id)]);
        $lists = [];
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
}
