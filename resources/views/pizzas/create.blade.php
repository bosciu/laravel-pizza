@extends('layout.main')

@section('content')
    <form action='{{ route('pizzas.store') }}' method='POST'>
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" placeholder="Scrivi il nome della pizza" name="name">
        </div>
        <div class="form-group">
            <label for="ingredients">Ingredienti</label>
            <input type="text" class="form-control" id="ingredients" placeholder="Inserisci gli igredienti" name="ingredients">
        </div>
        <div class="form-group">
            <label class="form-check-label" for="price">Prezzo</label>
            <input type="number" step="0.01" min="0.50" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
        </div>
        {{-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="veg" name="veg">
            <label class="form-check-label" for="veg">Veg</label>
        </div> --}}
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection