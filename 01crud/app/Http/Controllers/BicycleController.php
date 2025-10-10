<?php

namespace App\Http\Controllers;

use App\Bicycle;
use App\User;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bicycles = Bicycle::with('user')->get();
        return view('bicycles.index', compact('bicycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('bicycles.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'user_id' => 'required|exists:users,id',
        ]);

        Bicycle::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'price' => $request->price,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('bicycles.index')->with('sucess', 'Bicycle created sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bicycle = Bicycle::findOrFail($id);

        $bicycle->load('user');
        return view('bicycles.show', compact('bicycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bicycle = Bicycle::findOrFail($id);

        $users = User::all();
        return view('bicycles.edit', compact('bicycle', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bicycle = Bicycle::findOrFail($id);

        $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'user_id' => 'required|exists:users,id',
        ]);

        $id->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'price' => $request->price,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('bicycles.index')->with('success', 'Bicycle updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bicycle  $bicycle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bicycle = Bicycle::findOrFail($id);

        if($bicycle->users()->count() > 0){
            return redirect()->route('bicycles.index')->with('error', 'Not possible!');
        }

        $bicycle->delete();
        return redirect()->route('bicycle.index')->with('success', 'Deleted!');



    }
}
