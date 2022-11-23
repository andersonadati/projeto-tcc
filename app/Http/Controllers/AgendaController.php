<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Agenda;
use App\Models\Materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = (Auth::user());
            $agenda = DB::table('agendas')->where('user_id', $user['id'])->first();
            $materias = DB::table('materias')->orderBy('dia_semana')->where('agenda_id', $agenda->id)->get();
            //dd($agenda, $materias);
            $diasSemana = array(
                0 => "segunda",
                1 => "terça",
                2 => "quarta",
                3 => "quinta",
                4 => "sexta",
                5 => "sabado",
                6 => "domingo",
            );
            return view('dashboard',compact('agenda', 'materias', 'diasSemana'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
        return view('login.login');
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = (Auth::user());
        
        Agenda::create([
            'name' =>$request->name,
            'user_id' => $user['id']
        ]);

        return redirect()->route('agenda.index')->with('success','agenda created successfully.');
    }

    public function show(Agenda $agenda)
    {
        return view('agenda.show',compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('agenda.edit',compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $agenda->update($request->all());
        return redirect()->route('agenda.index')->with('success','agenda updated successfully');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('dashboard.index')->with('success','agenda deleted successfully');
    }
}
