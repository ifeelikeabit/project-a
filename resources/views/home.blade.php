@extends('layouts.app')

@if(Auth::check())@section('Page','Welcome '.Auth::user()->name)@endif
@section('content') 
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ __('You are logged in!') }}
    </div>
@endsection
