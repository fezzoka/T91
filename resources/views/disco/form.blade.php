@extends('layouts.base')
@section('conteudo')
    <h1>
        @if($disco)
            Atualizar Disco
        @else
            Novo disco
        @endif
    </h1>
    @if ($disco)        
        <form action="{{ route('disco.update', ['id'=>$disco->iddiscos]) }}" method="post">        
    @else
        <form action="{{ route('disco.store') }}" method="post">        
    @endif
        @csrf
       <div class="row">
            <div class="form-group col-md-6">
                <label for="cantor" class="form-label">cantor*</label>
                <input type="text" name="cantor" id="cantor"
                    value="{{ $disco ? $disco->cantor : old('cantor') }}" required
                class="form-control">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="pais" class="form-label">pais</label>
                    <input type="text" name="pais" id="pais"
                        value="{{ $disco ? $disco->pais : old('pais') }}" required
                    class="form-control">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="banda" class="form-label">banda</label>
                        <input type="text" name="banda" id="banda"
                            value="{{ $disco ? $disco->banda : old('banda') }}" required
                        class="form-control">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="fotourl" class="form-label">fotourl</label>
                            <input type="text" name="fotourl" id="fotourl"
                                value="{{ $disco ? $disco->fotourl : old('fotourl') }}" required
                            class="form-control">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="genero" class="form-label">genero</label>
                                <input type="text" name="genero" id="genero"
                                    value="{{ $disco ? $disco->genero : old('genero') }}" required
                                class="form-control">
                            </div>
            <div class="form-group col-md-2">
                <label for="btn-enviar" class="form-label">&nbsp;</label>
                <input type="submit" value="{{ $disco ? 'Atualizar' : 'Cadastrar' }}" 
                 id="btn-enviar"  class="btn btn-primary form-control">
            </div>
       </div>
    </form>
@endsection