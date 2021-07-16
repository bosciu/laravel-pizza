@extends('layout.main')

@section('content')
    <h1>Homepage</h1>
    <section>
        <article>
            @foreach ($pizza as $item)
                <h2>{{ $item->name }}</h2>
                <h2>{{ $item->price }}</h2>
                <h2>{{ $item->ingredients }}</h2>
            @endforeach
        </article>
    </section>
@endsection