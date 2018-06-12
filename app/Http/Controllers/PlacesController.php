<?php

namespace App\Http\Controllers;

use App\Place;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function indexPlace($id = null) {
        if ($id == null) {
            return Place::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function show($id) {
        return Place::find($id);
    }

    public function update(Request $request,$id) {
        $place = Place::find($id);

        $place->name = $request->input('name');
        $place->description = $request->input('description');
        $place->image = $request->input('image');
        $place->popularity = $request->input('popularity');
        $place->category = $request->input('category');

        $place->save();

        return 'Success updating place' . $place->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $place = new Place;

        $place->name = $request->input('name');
        $place->description = $request->input('description');
        $place->image = $request->input('image');
        $place->popularity = $request->input('popularity');
        $place->category = $request->input('category');

        $place->save();

        return 'Place record successfully created with id ' . $place->id;
    }

    public function destroy($id) {
        $place = Place::find($id);
        $place->delete();

        return "Place record successfully deleted #" . $id;
    }

    public function place_info($id)
    {

        return view('place',$this->show($id));
    }




    public function place_show_all()
    {
        $places = Place::all();

        return view('place.place_all', ['places' => $places]);
    }

    public function place_seeings()
    {
        $places=Place::where('category','park')->get();

        return view('place.place_all', ['places' => $places]);
    }

    public function place_hotels()
    {
        $places=Place::where('category','hotel')->get();

        return view('place.place_all', ['places' => $places]);
    }
    public function place_food_drinks()
    {
        $places=Place::where('category','restaurant')->get();

        return view('place.place_all', ['places' => $places]);
    }

    public function place_fun()
    {
        $places=Place::where('category','park')->get();

        return view('place.place_all', ['places' => $places]);
    }


    public function place_index($id)
    {
        $place=Place::find($id);
        $posts=Post::where('place_id', $id)->get();

//        $places=Place::where('id',$id)->get();
//        $posts=Post::all();

       //$places=Place::all();
        //$places = DB::select('select * from places where id = :id', ['id' => $id]);

        return view('place.place_index', ['place' => $place,'posts'=>$posts]);
    }

    public function postPlaceAdd(Request $request)
    {
        $place = new Place;

        $place->name = $request->input('name');
        $place->description = $request->input('description');
        $place->image = $request->input('image');
        $place->address = $request->input('address');
        $place->phone_number = $request->input('phone_number');
        $place->email = $request->input('email');
        $place->popularity = $request->input('popularity');
        $place->category = $request->input('category');

        $place->save();

        return 'Place record successfully created with id ' . $place->id;
    }

    public function getDashboard()
    {
        $posts=Post::all();
        $places=Place::all();

        return view('place.place_all',['posts'=>$posts,'places'=>$places]);
    }
}
