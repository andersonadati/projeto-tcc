<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Agenda;
use App\Models\DiaSemana;
use App\Models\Tarefas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = (Auth::user());
            $agenda = DB::table('agendas')->where('user_id', $user['id'])->first();
            $dias = DB::table('dias_semana')->get();
            //dd($dias);
            $tarefas = DB::table('tarefas')->orderBy('dias_semana_id')->where('agenda_id', $agenda->id)->get();
            //dd($dias);
            return view('dashboard.dashboard',compact('agenda', 'dias', 'tarefas', 'user'));
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
        return redirect()->route('dashboard')->with('success','materias created successfully.');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('dashboard.dashboard')->with('success','agenda deleted successfully');
    }
}
