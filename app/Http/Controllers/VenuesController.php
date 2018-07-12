<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venue;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Feature;
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
        $venues = Venue::with('categories','features')->paginate(6);
        // if($username = request('by')){
        //     $user = User::where('name', $username)->firstOrFail();

        //     $venues->where('user_id', $user->id); 
        // }

        //$venues = $venues->get();

        //$venues = Venue::paginate(3);
        
        //$venues = Venue::filter($request)->get();
        //dd($venues);
        return view('venues.index', compact('venues'));
    }

    public function myVenues()
    {   
        $user = User::find(Auth::id());
        $userId = $user->id;
        $venues = Venue::where('user_id', $userId)->paginate(3);
        //dd($userId); 
        return view('venues.myvenues', compact('venues'));
    }

    public function byfeatures(Request $request)
    {

        $venues = Venue::where($venue->category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $features = Feature::all();
        return view('venues.create', compact('categories','features'));
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
        $venue->user_id = Auth::id();
        $venue->venue_name = request('venue_name');
        $venue->description = request('description');
        $venue->basic_info = request('basic_info');
        $venue->booking_info = request('booking_info');
        $venue->fee_info = request('fee_info');
        // $venue->images = $request->file('images');
        //$name = $file->getClientOriginalName();
        // $file->move('image', $name);
        // $venue->images = 
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
        //dd($venue);
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
        return redirect('/details');
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
        $venue = Venue::with('features', 'categories')->find($venue->id);
        return view('venues.show', compact('venue'));
    }

    public function createDetails()
    {

        $categories = Category::all();
        $features = Feature::all();
        return view('Venues.adddetails', compact('categories','features'));
    }

    public function storeDetails(request $request)
    {
        $venue = Venue::orderBy('created_at', 'desc')->first();
        $mycategories = request('mycategories');
        $venue->categories()->attach($mycategories);
        $myvenues = request('myfeatures');
        $venue->features()->attach($myvenues);

        return redirect ('/venues');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Venue $venue)
    {
        //
        $venue = Venue::find($venue->id);
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
        $venue = Venue::find($id);
    }
}


