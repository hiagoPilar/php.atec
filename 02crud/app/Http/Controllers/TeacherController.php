<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\School;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Teacher::with('school'); //puxa o nome da escola

        if($request->filled('school_id')){
            $query->where('school_id', $request->school_id);
        }

        $teachers = $query->paginate(10);
        $schools = School::all();

        return view('teachers.index', compact('teachers', 'schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        return view('teachers.create', compact('schools'));
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
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'hire_date'  => 'required|date',
            'school_id'  => 'required|exists:schools,id',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Professor ' . $teacher->name . ' criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $schools = School::all();

        return view('teachers.edit', compact('teacher', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::withTrashed()->findOrFail($id);

        $request->validated([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'hire_date'  => 'required|date',
            'school_id'  => 'required|exists:schools,id',
        ]);


        $teacher->update($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher '.$teacher->name.' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher '.$teacher->name.' deleted!');
    }


}
