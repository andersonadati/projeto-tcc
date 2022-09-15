<?php

namespace App\Http\Controllers;

use App\Models\Caderno;
use Illuminate\Http\Request;

class CadernoController extends Controller
{
    public function index()
    {
        //query
        $caderno = Caderno::latest()->paginate(5);

        return view('caderno.index',compact('caderno'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        //Caderno::create($request->all());
        Caderno::create([
            'id' => '1',
            'name' => $request->name
        ]);

        return redirect()->route('caderno.index')->with('success','caderno created successfully.');
    }

    public function show(Caderno $caderno)
    {
        return view('caderno.show',compact('caderno'));
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
