<?php

namespace futboleros\Http\Controllers;

use Illuminate\Http\Request;
use futboleros\Http\Requests;
use futboleros\Http\Controllers\Controller;
use futboleros\Hincha;
use Session;
use Redirect;
use Mail;
use Illuminate\Routing\Route;
use futboleros\Log;
use futboleros\User;


class HinchasController extends Controller
{
    public function __construct(){
        $this->middleware('cors');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        $newUsuario = new User();
        $newHincha = new Hincha();
        $newUsuario->create([
            'nombre' =>$request['nombre'],
            'email'=>$request['email'],
             'estatus' =>1,
            'password'=> bcrypt($request['password']),
            'categoria_user_id' =>6
            ]);
        $usuarioId = $newUsuario->all()->last();
        $newHincha->create([ 
            'user_id'=>$usuarioId->id,
            'num_celular'=>$request['telefono'],
            'nombre'=>$request['nombre'],
            'fecha_nacimiento'=>$request['fecha_nacimiento'],
            'path' =>$request['path']

            
            ]);

       return response()->json(['mensaje'=>'Hincha creado con Exito']);  
    }

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
