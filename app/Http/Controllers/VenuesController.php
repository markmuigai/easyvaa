<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venue;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\User;


class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$venues = Venue::all();
        // if($username = request('by')){
        //     $user = User::where('name', $username)->firstOrFail();

        //     $venues->where('user_id', $user->id); 
        // }

        //$venues = $venues->get();

        //$venues = Venue::paginate(6);
        
        $venues = Venue::filter($request)->get();
        dd($venues);

        
        //$venues = Venue::with('categories')->get();
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
        $categoryId = request('categoryId[]');
        $venue->categories()->attach($categoryId);
        $venueId = request('venueId');
        $venue->features()->attach($venueId);
        //Create a new venue using the request data
        $venue = new Venue;
        $venue->venue_name = request('venue_name');
        $venue->user_id = Auth::id();
        $venue->description = request('description');
        $venue->images = $request->file('images');
        $name = $file->getClientOriginalName();
        $file->move('image', $name);
        $venue->images = 
    //             $file->move('image',$name);
    //     $input=$request->get('images');
    //     $images=array();
    //     if($files=$request->file('images')){
    //         foreach($files as $file){
    //             $name=$file->getClientOriginalName();
    //             $file->move('image',$name);
    //             $images[]=$name;
    //         }
    //     }
    // /*Insert your data*/
    //     $venue->images = implode("|",$images);


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


