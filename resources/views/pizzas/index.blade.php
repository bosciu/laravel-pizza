@extends('layout.main')

@section('content')
    <h1>Elenco pizze</h1>
    
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th colspan="3">Azioni</th>
        </tr>
        
        @foreach ($pizzas as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>show</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
        @endforeach
    </table>
@endsection