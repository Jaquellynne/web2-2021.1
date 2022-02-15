<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $funcionarios = User::all();
        return view('pages.funcionario.index',compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('pages.funcionario.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest$request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {   
       
        $request->merge([
            'password' => Hash::make($request->password)
        ]); 

        if($request->foto){
            
            $nameFile = Str::of($request->name)->slug('-') . '.' .$request->foto->getClientOriginalExtension();

            $image = $request->foto->storeAs('avatar', $nameFile);

            $funcionario = User::create($request->all());
            $funcionario->update(['foto' => $image]);
            

        } else {
            $funcionario = User::create($request->except(['foto']));

        }
    

        if(!$funcionario)
            return redirect()->route('funcionario.index')->with('alert-danger', "Erro ao cadastrar {$request->nome} !!");
        

        return redirect()->route('funcionario.index')->with('alert-success', "{$request->name} foi cadastrado !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = User::where('id', $id)->first();

        if (!$funcionario)
            return redirect()->back();

        
        return view('pages.funcionario.show', [
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = User::where('id', $id)->first();

        if (!$funcionario)
            return redirect()->back();

        
        return view('pages.funcionario.edit', [
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest $request
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {   
        if($funcionario = User::find($id)) {

            if($request->password !== null) { 
                $funcionario->password = Hash::make($request->password);
            } 

            if($request->foto)
            {
                if($request->foto->isValid()){
                    if(Storage::exists($funcionario->foto)) 
                        Storage::delete($funcionario->foto);
                        

                    $nameFile = Str::of($request->name)->slug('-') . '.' .$request->foto->getClientOriginalExtension();

                    $image = $request->foto->storeAs('avatar', $nameFile);

                    $funcionario->foto = $image;
                } 
            } 
            
            $funcionario->name = $request->name;
            $funcionario->email = $request->email;
            $funcionario->cpf = $request->cpf;
            $funcionario->endereco = $request->endereco;
            $funcionario->telefone = $request->telefone;
            $funcionario->nivelAcesso = $request->nivelAcesso;
             $funcionario->dataNascimento = $request->dataNascimento;
            $funcionario->save();

            return redirect()->route('funcionario.index')
                            ->with('alert-success', "{$request->name} foi alterado !");
             
        }     

        return redirect()->route('funcionario.index')->with('alert-warning', "{$request->name} não foi alterado !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = User::findOrFail($id);

        if(Storage::exists($funcionario->foto)) 
            Storage::delete($funcionario->foto);

        if($funcionario->delete()){
            return redirect()->route('funcionario.index')->with('alert-danger', "{$funcionario->name} foi excluido !");
        }else{
            return redirect()->route('funcionario.index')->with('alert-info', "Não foi possivel excluir {$funcionario->name}!");
        }
    }
}
