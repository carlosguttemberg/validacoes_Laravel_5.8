<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [ 'nome'     => 'required|min:3|max:20|unique:clientes',
                    'idade'    => 'required',
                    'endereco' => 'required|min:5',
                    'email'    => 'required|email'];
        $mensagens = [
            'required'       => 'O atributo :attribute não pode estar em branco',
            'nome.required'  => 'O nome e requirido',
            'nome.min'       => 'Campo nome no minimo com 3 caracteres',
            'email.required' => 'Campo email obrigatorio',
            'email.email'    => 'Informe um email válido'
        ];

        $request->validate($regras, $mensagens);

        /*$request->validate(['nome'     => 'required|min:3|max:20|unique:clientes',
                            'idade'    => 'required',
                            'endereco' => 'required|min:5',
                            'email'    => 'required|email']);*/
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->email = $request->input('email');
        $cliente->endereco = $request->input('endereco');
        $cliente->save();

        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
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
