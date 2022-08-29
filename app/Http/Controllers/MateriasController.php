<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function index()
    {
        //query
        $materias = Materias::latest()->paginate(5);

        return view('materias.index',compact('materias'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'caderno_id' => 'required',
            'conteudo' => 'required'
        ]);

        Materias::create($request->all());

        return redirect()->route('materias.index')->with('success','materias created successfully.');
    }

    public function show(Materias $materias)
    {
        return view('materias.show',compact('materias'));
    }

    public function edit(Materias $materias)
    {
        return view('materias.edit',compact('materias'));
    }

    public function update(Request $request, Materias $materias)
    {
        $request->validate([
            'name' => 'required',
            'caderno_id' => 'required',
            'conteudo' => 'required'
        ]);

        $materias->update($request->all());
        return redirect()->route('materias.index')->with('success','materias updated successfully');
    }

    public function destroy(Materias $materias)
    {
        $materias->delete();
        return redirect()->route('materias.index')->with('success','materias deleted successfully');
    }
}
