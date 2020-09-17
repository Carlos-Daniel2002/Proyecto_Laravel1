<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShowMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newMovie= new Movie();
        $newMovie->name=$request->name;
        $newMovie->category_id=$request->category_id;
        $newMovie->language=$request->language;
        $newMovie->lead_actor=$request->lead_actor;
        $newMovie->time=$request->time;
        $newMovie->film_direction=$request->film_direction;
        $newMovie->premiere=$request->premiere;
        $newMovie->screenwriter=$request->screenwriter;
        $newMovie->music_by=$request->music_by;
        $newMovie->image= basename(Storage::put('app/public/',$request->image));
        $newMovie->video=$request->video;
        
        $newMovie->save();
        
        return redirect()->route('ShowMovie.show', $newMovie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id); 
        $category = Category::find($movie->category_id);

        
        return view('ShowMovie.show', compact('movie','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $categories = Category::get();
        return view('movies.edit', compact('movie','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate ([
            'image'=>["nullable","image", "max:2040"]
        ]);
        {
            $movie = Movie::findOrFail($id);
            if ($request->image){
            $movie->name=$request->name;
            $movie->category_id=$request->category_id;
            $movie->language=$request->language;
            $movie->lead_actor=$request->lead_actor;
            $movie->time=$request->time;
            $movie->film_direction=$request->film_direction;
            $movie->premiere=$request->premiere;
            $movie->screenwriter=$request->screenwriter;
            $movie->music_by=$request->music_by;
            $movie->image= basename(Storage::put('app/public/',$request->image));
            $movie->video=$request->video;

            }else{
            $movie->name=$request->name;
            $movie->category_id=$request->category_id;
            $movie->language=$request->language;
            $movie->lead_actor=$request->lead_actor;
            $movie->time=$request->time;
            $movie->film_direction=$request->film_direction;
            $movie->premiere=$request->premiere;
            $movie->screenwriter=$request->screenwriter;
            $movie->music_by=$request->music_by;
            $movie->video=$request->video;
            }
            $movie->save();


        $request->session()->flash('movies_updated', true);
        return redirect()->route('ShowMovie.show', $movie->id);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('movies_destroyed', true);
        return redirect()->route('movies.index');
    }
}
