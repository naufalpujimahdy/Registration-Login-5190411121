@extends('app')

@section('content')
    <main class="signup-form">
<div class="text-center">
    <p>{{  Auth::user()->name}} You logged in successfully</p>
</div>
    </main>
@endsection
