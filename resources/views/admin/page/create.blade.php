@extends('layouts.app')

@section('content')
@section('Page', 'Create Page')

<form action="{{ route('store') }}" method="POST">
    @csrf

    <div>
        <label for="id">Path:</label>
        <input type="text" name="id" required>

        @error('id')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>


    <div>
        <label for="title">Title:</label>
        <input type="text"  name="title">


        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>


    <div>
        <label for="content">Content:</label>
        <textarea name="content"  cols="30" rows="10"></textarea>


        @error('content')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Create</button>
</form>

@endsection
