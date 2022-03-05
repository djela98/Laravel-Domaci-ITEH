<?php

namespace App\Http\Controllers;

use App\Http\Resources\UniverzitetResource;
use App\Models\Univerzitet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniverzitetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $univerziteti = Univerzitet::all();
        return UniverzitetResource::collection($univerziteti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Univerzitet  $univerzitet
     * @return \Illuminate\Http\Response
     */
    public function show(Univerzitet $univerzitet)
    {
        return new UniverzitetResource($univerzitet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Univerzitet  $univerzitet
     * @return \Illuminate\Http\Response
     */
    public function edit(Univerzitet $univerzitet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Univerzitet  $univerzitet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Univerzitet $univerzitet)
    {
        $validator = Validator::make($request->all(), [
            'grad' => 'required',
            'godina_osnivanja' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $univerzitet->grad = $request->grad;
        $univerzitet->godina_osnivanja = $request->godina_osnivanja;


        $univerzitet->save();

        return response()->json(['Univerzitet uspešno ažuriran', new UniverzitetResource($univerzitet)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Univerzitet  $univerzitet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Univerzitet $univerzitet)
    {
        $univerzitet->delete();
        return response()->json(['Univerzitet uspešno obrisan', new UniverzitetResource($univerzitet)]);
    }
}
