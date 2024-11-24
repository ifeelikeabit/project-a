
@extends('layouts.app')
@section('title', 'Login Page')

@section('content')
@section('Page', 'Login')

<div class="flex m-b-100 mb-40">
    <div class="border-[#49c5b6] border-2 shadow-lg p-4">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="border-[#49c5b6] h-8 ">
                <label class="text-[#49c5b6] font-bold "><span class="w-[100px] inline-block">👤 Email </span>
                </label>
                <input name="email"  class="outline-none placeholder:text-center  border-b-4 border-b-[#49c5b6]"
                    placeholder="Enter your email" required />
            </div>
            <div class="border-[#49c5b6] h-8">
                <label class="text-[#49c5b6] font-bold"><span class="w-[100px] inline-block">🔒 Password</span> </label>
                <input name="password" class="outline-none placeholder:text-center border-b-4 border-b-[#49c5b6]"
                    type="password" placeholder="Enter your password" required />
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="bg-[#49c5b6] w-full rounded h-8 text-white mt-3 font-bold">🚀 Login</button>
            @if (session('error'))
                <p class="text-center text-danger mt-2">{{ session('error') }}</p>
            @endif

            <div class="text-center mt-4">
                Don't have an account? <a href="register" class="text-[#49c5b6] font-bold ">Create now 📋</a>
            </div>

        

        </form>
    </div>
</div>
@endsection
