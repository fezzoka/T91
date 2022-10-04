@extends('layouts.base')

@section('conteudo')

    <h1> 
        Discos lançados 
        - 
        <a href="{{ route('disco.create') }}" class="btn btn-dark">
            Novo
        </a>
    </h1>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Ações</th>
                <th></th>
                <th>Nome do Cantor</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($discos->get() as $disco)                
            <tr>
                <td>
                    <a href="{{ route('disco.edit', ['id'=>$disco->iddiscos]) }}" class="btn btn-success">
                        Editar
                    </a>
                    <a href="{{ route('disco.destroy', ['id'=>$disco->iddiscos]) }}" class="btn btn-danger">
                        deletar
                    </a>
                    <a href="{{ route('disco.show', ['id'=>$disco->iddiscos]) }}" class="btn btn-primary">
                        Detalhes
                    </a>
                </td>
                <td>{{ $disco->iddisco }}</td>
                <td>{{ $disco->cantor }}</td>
            </tr>
            
            
            @endforeach
        </tbody>
    </table>

    
@endsection