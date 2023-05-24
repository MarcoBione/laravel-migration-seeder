@extends('layouts.app')

@section('maincontent')
    <main>
        <h1>test</h1>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->company }}</li>
            @endforeach
        </ul>
    </main>
@endsection
