@extends('layouts.main')

@section('content')
<main class="container py-5">
    @forelse ($trains as $train)
        @include('includes.trains.train_card')
    @empty
        <h1>Non ci sono treni</h1>
    @endforelse
</main>
@endsection