@extends('layouts.app')

@section('content')
@section('Page', 'Users')

<div class="flex flex-col">
    <div class="flex justify-end mb-4">
        <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg  " href="{{ route('user.create') }}"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-[#121212] text-white rounded-lg shadow-lg">
            <thead>
                <tr>
                    <th class="py-3 px-6 text-center border-b border-[#49c5b6]">Name</th>
                    <th class="py-3 px-6 text-center border-b border-[#49c5b6]">Email</th>
                    <th class="py-3 px-6 text-center border-b border-[#49c5b6]  ">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-[#49c5b6] hover:bg-[#333333]">
                       
                        <td class="py-3 px-6">{{ $user->name }}</td>
                        <td class="py-3 px-6">{{ $user->email }}</td>
                        <td class="py-3 px-6 flex space-x-2">
                            <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg"
                                href="{{ route('user.show', ['id' => $user->id]) }}"><i class="fa-solid fa-eye"></i></a>
                            <a class="bg-[#49c5b6] text-white px-4 py-2 rounded-lg"
                                href="{{ route('user.edit', ['id' => $user->id]) }}"><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
