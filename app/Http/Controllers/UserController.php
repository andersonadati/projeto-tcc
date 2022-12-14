<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agenda;
use App\Models\DiasSemana;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() 
    {
        return view('login.login');
    }

    public function auth(Request $request) 
    {
        //dd($request->password);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->start();

            $user = Auth::user();
            $agenda = DB::table('agendas')->where('user_id', $user['id'])->first();
            if(isset($agenda)) {
                return redirect('/dashboard');
            } else {
                $agendaPadrao = array(
                    'name' => 'Minha agenda',
                    'user_id' => $user['id']
                );
                $segunda = array([
                    'dia' => 'segunda',
                ]);
                $terca = array([
                    'dia' => 'terça',
                ]);
                $quarta = array([
                    'dia' => 'quarta',
                ]);
                $quinta = array([
                    'dia' => 'quinta',
                ]);
                $sexta = array([
                    'dia' => 'sexta',
                ]);
                $sabado = array([
                    'dia' => 'sábado',
                ]);
                $domingo = array([
                    'dia' => 'domingo',
                ]);
                //dd($dias);
                Agenda::create($agendaPadrao);
            }
        }

        return back()->withErrors([
            'email' => 'Usuário e/ou senha incorretos!',
        ])->onlyInput('email');
    }

    public function index()
    {
        //query
        $user = User::latest()->first();

        return view('user.index',compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        //dd($request->password, $request->ConfirmPassword);
        if($request->password == $request->ConfirmPassword) {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            try {
                User::create($data);
            } catch (Exception $e) {
                return back()->with('email','Esse email ja esta cadastrado, tente outro!');
            }
            return redirect()->route('login.page')->with('success','user created successfully.');
        } 
        return back()->withErrors([
            'password' => 'Confirme se as senhas foram digitadas iguais!',
        ])->onlyInput('email');

    }

    public function show(User $user)
    {
        //dd($user->id);
        return view('user',compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());
        return back()->with('success','user updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success','user deleted successfully');
    }
}
