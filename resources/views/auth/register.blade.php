
@extends('layouts.app')
@section('content')
@section('title', 'Register Page')

@section('Page','Register')
<div class="flex mb-40 ">
    <div class="border-[#49c5b6] border-2 shadow-lg p-7 w-max">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div  class="border-[#49c5b6] h-8 " >
                <label class="text-[#49c5b6] font-bold "><span class="w-[120px] inline-block">👤 Name </span> </label>
                <input name="name" class="outline-none placeholder:text-center  border-b-4 border-b-[#49c5b6]" placeholder="Enter your username" required />
            </div>
            <div  class="border-[#49c5b6] h-8 " >
                <label class="text-[#49c5b6] font-bold "><span class="w-[120px] inline-block">✉️ Email </span> </label>
                <input name="email" class="outline-none placeholder:text-center  border-b-4 border-b-[#49c5b6]" placeholder="Enter your email         " required />
            </div>
            <div  class="border-[#49c5b6] h-8">
                <label class="text-[#49c5b6] font-bold" ><span class="w-[120px] inline-block">🔒 Password</span> </label>
                <input name="password" class="outline-none placeholder:text-center border-b-4 border-b-[#49c5b6]" type="password" placeholder="Enter your password" required />
            </div>
            <div  class="border-[#49c5b6] h-8 w-max" >
                <label class="text-[#49c5b6] font-bold" ><span class="w-[120px] inline-block">🔒 Re/Password</span> </label>
                <input name="password_confirmation" class="outline-none placeholder:text-center border-b-4 border-b-[#49c5b6]" type="password" placeholder="Enter your password" required />
            </div>
            <button type="submit" class="bg-[#49c5b6] w-full rounded h-8 text-white mt-8 font-bold">🚀 Register</button>
        

            <div class="text-center mt-4">
                Already registered ? <a href="login" class="text-[#49c5b6] font-bold ">Login 🔑</a>
                @if (session('success'))
                <br><i class="text-yellow-400">{{ session('success') }}</i>
            @endif
            </div>
        </form>
    </div>
</div>



@endsection
