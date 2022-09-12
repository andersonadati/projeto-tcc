<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categoria = Categorias::latest()->paginate(5);

        return view('categorias.index',compact('categoria'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('Categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Categorias::create($request->all());

        return redirect()->route('categorias.index')->with('success','Categorias created successfully.');
    }

    public function show(Categorias $categoria)
    {
        return view('categorias.show',compact('categoria'));
    }

    public function edit(Categorias $categoria)
    {
        return view('categorias.edit',compact('categoria'));
    }

    public function update(Request $request, Categorias $categoria)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success','Categorias updated successfully');
    }

    public function destroy(Categorias $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success','Categorias deleted successfully');
    }
}
