<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries',
        ]);

        Country::create([
            'name' => $request->name
        ]);

        return redirect()->route('countries.index')->with('success', 'País criado!');
    }

    public function show($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.show', compact('country'));
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $id,
        ]);

        $country->update([
            'name' => $request->name
        ]);

        return redirect()->route('countries.index')->with('success', 'País atualizado!');
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);

        if ($country->users()->count() > 0) {
            return redirect()->route('countries.index')
                ->with('error', 'Não é possível excluir - existem usuários associados!');
        }

        $country->delete();

        return redirect()->route('countries.index')->with('success', 'País excluído!');
    }
}
