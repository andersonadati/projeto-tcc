<?php

namespace App\Http\Controllers;

use App\Models\FolhaCaderno;
use Illuminate\Http\Request;

class FolhaCadernoController extends Controller
{
    public function index()
    {
        //query
        $folha = FolhaCaderno::latest()->paginate(5);

        return view('folha.index',compact('folha'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('folha.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'caderno_id' => 'required',
            'conteudo' => 'required'
        ]);

        FolhaCaderno::create($request->all());

        return redirect()->route('folha.index')->with('success','folha created successfully.');
    }

    public function show(FolhaCaderno $folha)
    {
        return view('folha.show',compact('folha'));
    }

    public function edit(FolhaCaderno $folha)
    {
        return view('folha.edit',compact('folha'));
    }

    public function update(Request $request, FolhaCaderno $folha)
    {
        $request->validate([
            'name' => 'required',
            'caderno_id' => 'required',
            'conteudo' => 'required'
        ]);

        $folha->update($request->all());
        return redirect()->route('folha.index')->with('success','folha updated successfully');
    }

    public function destroy(FolhaCaderno $folha)
    {
        $folha->delete();
        return redirect()->route('folha.index')->with('success','folha deleted successfully');
    }
}
