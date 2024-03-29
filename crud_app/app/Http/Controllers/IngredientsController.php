<?php

namespace App\Http\Controllers;

use App\Models\Ingradient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$ingedients = Ingradient::all();
        $ingredients = Ingradient::with('recipes')->get();
        return view('ingredients.index', ['ingredients' => $ingredients]);
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
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingradient $ingradient)
    {
        //dd($ingradient);
        return view('ingredients.show',['ingred' => $ingradient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingradient $ingradient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingradient $ingradient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingradient  $ingradient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingradient $ingradient)
    {
        //
    }
}
