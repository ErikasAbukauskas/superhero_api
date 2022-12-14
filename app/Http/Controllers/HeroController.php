<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
Use App\Http\Resources\HeroResource;
Use App\Http\Resources\ImageResource;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $heroes = HeroResource::collection(Hero::paginate(10));

        // return response()->json([compact('heroes'), 200]);

        return HeroResource::collection(Hero::sortable()->paginate(10));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroRequest $request)
    {


        $file = $request->file('image')->store('public');

        // $file = $request->file('image');
        // $extension = $file->getClientOriginalExtension();
        // $filename = time().'.'.$extension;
        // $file->move('public/image', $filename);

        Hero::create($request->validated() + $file);




        return response()->json(['message' => 'Hero created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {

        // $hero = HeroResource::collection(Hero::all());

        // return response()->json([$hero], 200);

        return HeroResource::collection(Hero::where('id', $hero->id)->paginate(10));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();

        return response()->json(['message' => 'Hero deleted successfully']);

    }
}
