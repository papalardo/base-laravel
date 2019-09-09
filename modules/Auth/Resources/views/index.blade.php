@extends('auth::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <example-component></example-component>
    <p>
        <div class="grid-x">
            <div class="cell">
                TESTE
            </div>
            <div class="cell">
                TESTE
            </div>
            <div class="cell">
                TESTE
            </div>
            <div class="cell">
                TESTE
            </div>
        </div>
        This view is loaded from module: {!! config('auth.name') !!}
    </p>
@endsection
