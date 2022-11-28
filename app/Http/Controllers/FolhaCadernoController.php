<?php

namespace App\Http\Controllers;

use App\Models\FolhaCaderno;
use App\Models\Caderno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class FolhaCadernoController extends Controller
{
    public function index()
    {
        $user = (Auth::user());
        $caderno = DB::table('cadernos')->where('user_id', $user['id'])->get();
        $folhas = DB::table('folha_cadernos')->where('caderno_id', $caderno[0]->id)->get();
        return view('folha.index', compact('folhas', 'user', 'caderno'));
    }

    public function create()
    {
        return view('folha.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $caderno = DB::table('cadernos')->where('user_id', $user['id'])->get();
        $request->validate([
            'name' => 'required',
        ]);
        //dd($request->caderno_id);
        FolhaCaderno::create([
            'name' => $request->name,
            'caderno_id' => $request->caderno_id,
            'conteudo' => ''
        ]);
        $folha = DB::table('folha_cadernos')->latest()->first();
        return redirect()->route('folha.index')->with('success','folha deleted successfully');
    }

    public function show(FolhaCaderno $folha)
    {
        //dd($folha);
        $user = (Auth::user());
        //dd($user['id']);
        $caderno = DB::table('cadernos')->where('user_id', $user['id'])->get();
        //dd($caderno[0]->id);
        $folhas = DB::table('folha_cadernos')->where('caderno_id', $caderno[0]->id)->get();
        //dd($folhas);
        return view('folha.show', compact('folhas', 'folha', 'user'));
    }

    public function edit(FolhaCaderno $folha)
    {
        return view('folha.edit',compact('folha'));
    }

    public function update(Request $request, FolhaCaderno $folha)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'caderno_id' => 'required',
            'conteudo' => 'required'
        ]);

        $folha->update($request->all());
        $user = (Auth::user());
        //dd($user['id']);
        $caderno = DB::table('cadernos')->where('user_id', $user['id'])->get();
        //dd($caderno[0]->id);
        $folhas = DB::table('folha_cadernos')->where('caderno_id', $caderno[0]->id)->get();
        //dd($folhas);
        return view('folha.show', compact('folhas', 'folha', 'user'));
    }

    public function destroy(FolhaCaderno $folha)
    {
        $folha->delete();
        return redirect()->route('folha.index')->with('success','folha deleted successfully');
    }
}
