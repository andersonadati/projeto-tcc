<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefas::latest()->paginate(5);
        return view('dashboard',compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $idAgenda = DB::table('agendas')->where('user_id', $user['id'])->first();
        //dd( $request->get('dia'));
        Tarefas::create([
            'titulo' => $request->titulo,
            'dias_semana_id' => $request->get('dia'),
            'agenda_id' => $idAgenda->id
        ]);

        return redirect()->route('dashboard')->with('success','materias created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefas  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefas $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefas  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefas $tarefa)
    {
        $user = (Auth::user());
        $agenda = DB::table('agendas')->where('user_id', $user['id'])->first();
        $dias = DB::table('dias_semanas')->where('agenda_id', $agenda->id)->get();
        return view('tarefas.edit',compact('tarefa', 'dias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarefas  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefas $tarefa)
    {
        $user = (Auth::user());
        $idAgenda = DB::table('agendas')->where('user_id', $user['id'])->first();

        $tarefa->update([
            'titulo' => $request->titulo,
            'dias_semana_id' => $request->get('dia'),
            'agenda_id' => $idAgenda->id
        ]);
        return redirect()->route('dashboard')->with('success','Tarefas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefas  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefas $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('dashboard')->with('success','Tarefas deleted successfully');
    }
}

