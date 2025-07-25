<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();

        return view('components.country.index', compact('countries'));
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
     * @param  \App\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function show(Country $countries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $countries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $countries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $countries)
    {
        //
    }
}
