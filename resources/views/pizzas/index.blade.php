@extends('layout.main')

@section('content')
    <h1>Elenco pizze</h1>
    
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Vegetariano</th>
            <th colspan="3">Azioni</th>
        </tr>
        
        @foreach ($pizzas as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->veg ? 'Si' : 'No' }}</td>
                <td>show</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
        @endforeach
    </table>
@endsection