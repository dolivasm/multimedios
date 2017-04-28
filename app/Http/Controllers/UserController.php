<?php

namespace Multimedios\Http\Controllers;

use Auth;

use Session;

use Redirect;

use Illuminate\Http\Request;

use Multimedios\Http\Requests;

use Multimedios\Http\Requests\LoginRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$users = \Multimedios\User::All();
        return view('usuario.usuarios', compact('users'));*/
        return view('usuario.login');
    }
    
    public function users() {
        $users = \Multimedios\User::All();
        return view('usuario.usuarios', compact('users'));
    }
    
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['name'=>$request['name'], 'password'=>$request['password']])){
            return Redirect::to('welcome');
        }
        Session::flash('message-error','Datos son incorrectos');
        return Redirect::to('/');
    }
    
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
       \Multimedios\User::create([
           'name'=> $request['name'],
           'password'=> $request['password'],
           //'password'=> bcrypt($request['password']),
           ]); 
        //return "Usuario Registrado";
        return view('welcome');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
