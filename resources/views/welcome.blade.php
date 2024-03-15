{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')

@section('main')
<main>
    <h1>ciao Mondo</h1>
</main>
@endsection
