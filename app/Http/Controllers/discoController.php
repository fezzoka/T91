<?php

namespace App\Http\Controllers;

use App\Models\Disco;
use Illuminate\Http\Request;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discos = Disco::orderBy('cantor');
        return view('disco.index')
                ->with(compact('discos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disco = null;
        return view('disco.form')
                ->with(compact('disco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disco = new Disco();
        $disco->fill($request->all());
        $disco->save();

        return redirect()
                ->route('disco.index')
                ->with('success',' Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $disco = Disco::find($id);
        return view('disco.show')
                ->with(compact('disco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $disco = Disco::find($id);
        return view('disco.form')
                ->with(compact('disco'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $disco = Disco::find($id);
        $disco->fill($request->all());
        $disco->save();

        return redirect()
                ->route('disco.index')
                ->with('success',' Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $disco = Disco::find($id);        
        $disco->delete();

        return redirect()
                ->route('disco.index')
                ->with('danger',' Excluído com sucesso!');
    }
}
