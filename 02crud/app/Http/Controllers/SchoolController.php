<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = School::query();

        //pesquisar por nome e cidade se enviado
        if($request->filled('search_name')){
            $query->where('name', 'like', '%' . $request->search_name . '%');
        }

        if($request->filled('search_city')){
            $query->where('city', 'like', '%' . $request->search_city . '%');
        }

        //inclui registros soft deletes
        $schools = $query->withTrashed()->paginate(10);

        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('schools.create');
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
            'name' => 'required|unique:schools,name',
            'city' => 'required',
        ]);

        School::create($request->all());

        return redirect()->route('schools.index')->with('sucess', 'School created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::withTrashed()->findOrFail($id);
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $school = School::withTrashed()->findOrFail($id);

        $request->validate([
            'name' => 'required|unique:schools,name,' . $school->id,
            'city' => 'required',
        ]);

        $scholl->update($request->all());

        return redirect()->route('schools.index')->with('sucess', 'School updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::withTrashed()->findOrFail($id);
        $school->delete();

        return redirect()->route('schools.index')->with('sucess', 'School deleted!');
    }

    public function Restore($id){

        $school = School::withTrashed()->findOrFail($id);
        $school->restore();

        return redirect()->route('schools.index')->with('sucess', 'School restored!');
    }
}
