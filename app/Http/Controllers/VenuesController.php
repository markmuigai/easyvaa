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
        $features = Feature::all();
        $categories = Category::all();


        $venues = Venue::with('categories','features')->paginate(6);
        // if($username = request('by')){
        //     $user = User::where('name', $username)->firstOrFail();

        //     $venues->where('user_id', $user->id); 
        // }

        //$venues = $venues->get();

        //$venues = Venue::paginate(3);
        
        //$venues = Venue::filter($request)->get();
        //dd($mycategories);
        return view('venues.index', compact('venues','categories','features'));
    }


    public function showfilters()
    {
        $venues = Venue::paginate(6);
        $features = Feature::all();
        $categories = Category::all();
        return view('Venues.filter', compact('features', 'categories', 'venues'));
    }

    public function filters()
    {
        $features = Feature::all();
        $categories = Category::all();

        $mycategories=request('mycategories');
        //$venues = Venue::where('$venue->categories', Request('categories'))->get();
        $venues = Venue::whereHas('categories', function($q){
            $mycategories=request('mycategories');
            $q->whereIn('id', $mycategories);
        })->paginate(6);

        return view('Venues.filter', compact('features', 'categories', 'venues'));
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

        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $venue->image = $name;
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        $second_image = $request->file('second_image');
        $name = time().'.'.$second_image->getClientOriginalExtension();
        $venue->second_image = $name;
        $destinationPath = public_path('/images');
        $second_image->move($destinationPath, $name);

        $third_image = $request->file('third_image');
        $name = time().'.'.$third_image->getClientOriginalExtension();
        $venue->image = $name;
        $destinationPath = public_path('/images');
        $third_image->move($destinationPath, $name);
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
    public function edit(Venue $venue, Category $category, Feature $feature)
    {
        //
        $mycategories = $venue->categories()->pluck('id')->all(); 
        $categories = Category::all();
        $features = Feature::all();
        //dd($features);
        $venue = Venue::find($venue->id);
        return view('venues.edit', compact('venue','categories','mycategories','features'));
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
        //Validate request data
        //check laravel validation docs for examples
        $this->validate(request(),[
            'venue_name' =>'required|min:3',
            'description' => 'required'
        ]);

        $venue->user_id = Auth::id();
        $venue->venue_name = request('venue_name');
        $venue->description = request('description');
        $venue->basic_info = request('basic_info');
        $venue->booking_info = request('booking_info');
        $venue->fee_info = request('fee_info');
        $mycategories = request('mycategories');
        $venue->categories()->attach($mycategories);
        $myvenues = request('myfeatures');
        $venue->features()->attach($myvenues);
        $venue->categories()->sync(request('mycategories'));
        //Save it to the database
        $venue->save();
        //dd($venue);
        //flash message, modal.
        //Your venue has been saved successfully 
        session()->flash('message', 'Your venue has been Edited successfully');
        //And then redirect to the homepage
        return redirect('/myvenues');

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


