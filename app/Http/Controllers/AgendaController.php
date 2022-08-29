<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index()
    {
        //query
        $agenda = Agenda::latest()->paginate(5);

        return view('agenda.index',compact('agenda'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required',
        ]);

        Agenda::create($request->all());

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
            'user_id' => 'required',
        ]);

        $agenda->update($request->all());
        return redirect()->route('agenda.index')->with('success','agenda updated successfully');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agenda.index')->with('success','agenda deleted successfully');
    }
}
