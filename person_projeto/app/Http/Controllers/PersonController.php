<?php

namespace App\Http\Controllers;

use App\Person;
use App\Address;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::with('address')->paginate(10);
        return view('people.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addresses = Address::all();
        return view('people.create', compact('addresses'));
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
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|email|unique:people',
            'address_id' => 'nullable|exists:addresses,id'
        ]);

        Person::create($request->all());

        return redirect()->route('people.index')
            ->with('success', 'Person created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('people.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $addresses = Address::all();
        return view('people.edit', compact('person', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'email' => 'required|email|unique:people,email,' . $person->id,
            'address_id' => 'nullable|exists:addresses,id'
        ]);

        $person->update($request->all());

        return redirect()->route('people.index')
            ->with('success', 'Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('people.index')
            ->with('success', 'Person deleted successfully');
    }
}
