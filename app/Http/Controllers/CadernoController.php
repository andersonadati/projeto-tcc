<?php

namespace App\Http\Controllers;

use App\Models\Caderno;
use App\Models\FolhaCaderno;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CadernoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            //query
            $user = (Auth::user());
            $agenda = DB::table('agendas')->where('user_id', $user['id'])->first();
            $cadernos = DB::table('cadernos')->where('user_id', $user['id'])->get();
            //dd($cadernos);
            return view('caderno.index',compact('cadernos', 'user'));
        }
        return view('login.login');
    }

    public function create()
    {
        return view('caderno.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = (Auth::user());

        Caderno::create([
            'name' => $request->name,
            'user_id' => $user['id']
        ]);

        return redirect()->route('caderno.index')->with('success','caderno created successfully.');
    }

    public function show(Caderno $caderno)
    {
        $user = (Auth::user());
        $folhas = DB::table('folha_cadernos')->where('caderno_id', $caderno->id)->get();
        //dd($folhas);
        return view('caderno.show',compact('folhas', 'user', 'caderno'));
    }

    public function edit(Caderno $caderno)
    {
        return view('caderno.edit',compact('caderno'));
    }

    public function update(Request $request, Caderno $caderno)
    {
        $request->validate([
            'name' => 'required',
            'user_id' => 'required',
        ]);

        $caderno->update($request->all());
        return redirect()->route('caderno.index')->with('success','caderno updated successfully');
    }

    public function destroy(Caderno $caderno)
    {
        $caderno->delete();
        return redirect()->route('caderno.index')->with('success','caderno deleted successfully');
    }
}
