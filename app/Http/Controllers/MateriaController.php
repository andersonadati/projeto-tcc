<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class MateriaController extends Controller
{
    public function index()
    {
        $materia = Materias::latest()->paginate(5);

        return view('materias.index',compact('materia'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = Auth::user();
        $idAgenda = DB::table('agendas')->where('user_id', $user['id'])->first();
        Materias::create([
            'name' => $request->name,
            'agenda_id' => $idAgenda->id,
            'dia_semana' => $request->dia_semana
        ]);

        return redirect()->route('dashboard')->with('success','materias created successfully.');
    }

    public function show(Materias $materia)
    {
        //dd($materia->id);
        return view('materias.show',compact('materia'));
    }

    public function edit(Materias $materia)
    {
        return view('materias.edit',compact('materia'));
    }

    public function update(Request $request, Materias $materia)
    {
        $request->validate([
            'name' => 'required',
            'agenda_id' => 'required'
        ]);

        $materia->update($request->all());
        return redirect()->route('materias.index')->with('success','materias updated successfully');
    }

    public function destroy(Materias $materia)
    {
        $materia->delete();
        return redirect()->route('dashboard.index')->with('success','materias deleted successfully');
    }
}
