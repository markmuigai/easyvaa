<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venue;
use Auth;
use Illuminate\Support\Facades\Storage;


class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $venues = Venue::paginate(3);
        //$venues = Venue::all();
        // dd($venues);
        return view('venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('venues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a new venue using the request data
        $venue = new Venue;
        $venue->venue_name = request('venue_name');
        $venue->user_id = Auth::id();
        $venue->description = request('description');
        $venue->imageUrl = $request->file('imageUrl')->store('public');
        // $url = Storage::url($venue->imageUrl);
        // dd($venue->imageUrl);
        // //Save it to the database
        $venue->save();

        //Validate request data
        //check laravel validation docs for examples
        $this->validate(request(),[
            'venue_name' =>'required|min:3',
            'description' => 'required'
        ]);

        //flash message, modal.
        //Your venue has been saved successfully 
        session()->flash('message', 'Your venue has been saved successfully');
        //And then redirect to the homepage
        return redirect('/venues/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        //
        return view('venues.show', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $venue = Venue::find($id);
        return view('venues.edit', compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venue $venue)
    {
        //
        $venue->venue_name = request('venue_name');
        $venue->user_id = Auth::id();
        $venue->description = request('description');
        $venue->imageUrl = $request->file('imageUrl');
        //Save it to the database
        $venue->save();

        //Validate request data
        //check laravel validation docs for examples
        $this->validate(request(),[
            'venue_name' =>'required|min:3',
            'description' => 'required'
        ]);

        //flash message, modal.
        //Your venue has been saved successfully 
        session()->flash('message', 'Your venue has been Edited successfully');
        //And then redirect to the homepage
        return redirect('/venues');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
