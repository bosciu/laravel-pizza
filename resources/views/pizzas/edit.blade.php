@extends('layout.main')

@section('content')
{{-- <h1>{{ $pizza->name }}</h1> --}}

<h1>Stai modificando : {{ $pizza->name }}</h1>
<form action='{{ route('pizzas.update', $pizza->id) }}' method='POST'>
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" placeholder="Scrivi il nome della pizza" name="name" value="{{ old('name', $pizza->name) }}">
    </div>
    <div class="form-group">
        <label for="description">Ingredienti</label>
        <input type="text" class="form-control" id="description" placeholder="Inserisci gli igredienti" name="description" value="{{ old('description', $pizza->description) }}">
    </div>
    <div class="form-group">
        <label class="form-check-label" for="price">Prezzo</label>
        <input type="number" step="0.01" min="0.50" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{ old('price', $pizza->price) }}">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="veg" name="veg" {{ $pizza->veg == 1 ? 'checked' : ''}}>
        <label class="form-check-label" for="veg">Veg</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection