@extends('layouts.app')
@section('content')
@section('Page', 'Edit Page')

{{ session('success') }}
<div class="flex border-2 shadow-lg p-4">

<form action="{{ route('update', $page->id) }}" method="POST">
    @csrf
    <div class="p-4">
        <label >Url></label>
        <input class="bg-slate-300 pl-4"  type="text" name="id" value="{{ $page->id }}">
    </div>
    <div>
        <label >Title></label>
        <input class="bg-slate-300 pl-4" type="text" name="title" value="{{ $page->title }}">
    </div>
    <div class="border-[#49c5b6] flex p-4">
        <label for="">Content></label><textarea class="border-4 bg-slate-300 pl-4  " name="content" cols="30" rows="10">{{ $page->content  }}</textarea>
        <button class="bg-[#49c5b6]" type="submit">Save Page</button>
    </div>
  
</form>
</div>
@endsection
