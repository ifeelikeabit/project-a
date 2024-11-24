@extends('layouts.app')
@section('content')
@section('Page', 'Pages')

<div class="flex justify-end mb-4">
    <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg  " href="{{ route('create') }}"><i class="fa-solid fa-plus"></i></a>
</div>
<div class="overflow-x-auto">
    <table class="min-w-full bg-[#121212] text-white rounded-lg shadow-lg">
        <thead>
            <tr>
                <th class="py-3 px-6 text-center border-b border-[#49c5b6]">URL Tag</th>
                <th class="py-3 px-6 text-center border-b border-[#49c5b6]">Title</th>
                <th class="py-3 px-6 text-center border-b border-[#49c5b6]">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
            <tr class="border-b border-[#49c5b6] hover:bg-[#333333]">
                <td class="py-3 px-6">{{ $page->id }}</td>
                <td class="py-3 px-6">{{ $page->title }}</td>
                <td class="py-3 px-6 flex space-x-2 justify-center">
                    <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg" href="{{ route('show', ['id' => $page->id]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg" href="{{ route('edit', ['id' => $page->id]) }}">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
