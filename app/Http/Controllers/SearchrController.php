<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SearchrController extends Controller
{
    public function search (Request $request)
    {
        $data ['movies'] = 
        Movie::where('name', 'LIKE', "%{$request->search}%")->
        Orwhere('lead_actor', 'LIKE', "%{$request->search}%")->
        Orwhere('language', 'LIKE', "%{$request->search}%")->
        Orwhere('premiere', 'LIKE', "%{$request->search}%")->get();
        return view ('information.resultsSearch' , $data);
        
        
    }
}
