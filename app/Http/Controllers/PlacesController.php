<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use App\Http\Requests;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
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
}
