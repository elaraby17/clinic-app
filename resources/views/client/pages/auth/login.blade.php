@extends('client.layouts.master')

@section('title', 'Login')

@section('content')

@if(@session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>


@endif
<div class="min-h-screen bg-slate-50 flex items-center justify-center px-4 py-16">
    <div class="w-full max-w-md">

        {{-- Card --}}
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-8">

            {{-- Header --}}
            <div class="text-center mb-8">
                <a href="{{ route('home') }}" class="inline-block font-extrabold text-3xl text-[#0a1f5c] tracking-tight mb-2">
                    V<span class="text-sky-400">Care</span>
                </a>
                <h2 class="text-xl font-bold text-slate-800 mb-1">Welcome back</h2>
                <p class="text-sm text-slate-400">Sign in to your account to continue</p>
            </div>

            {{-- Breadcrumb --}}
            <nav class="flex items-center justify-center gap-2 text-xs mb-8">
                <a href="{{ route('home') }}" class="text-slate-400 hover:text-sky-500 transition-colors">Home</a>
                <span class="text-slate-300">›</span>
                <span class="text-sky-500 font-medium">Login</span>
            </nav>

            {{-- Form --}}
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
                @csrf

                {{-- Email --}}
                <div class="flex flex-col gap-1.5">
                    <label for="email" class="text-sm font-semibold text-slate-700">
                        Email <span class="text-red-400">*</span>
                    </label>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="you@example.com"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-800
                                  placeholder-slate-300 bg-slate-50 outline-none
                                  focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-400/15
                                  transition-all duration-200
                                  @error('email') border-red-400 bg-red-50 @enderror">
                    @error('email')
                        <p class="text-xs text-red-500 mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="flex flex-col gap-1.5">
                    <label for="password" class="text-sm font-semibold text-slate-700">
                        Password <span class="text-red-400">*</span>
                    </label>
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="••••••••"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-800
                                  placeholder-slate-300 bg-slate-50 outline-none
                                  focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-400/15
                                  transition-all duration-200
                                  @error('password') border-red-400 bg-red-50 @enderror">
                    @error('password')
                        <p class="text-xs text-red-500 mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-[#0a1f5c] text-white text-sm font-bold py-3.5 rounded-xl
                               hover:bg-[#0d2872] active:scale-[0.98] transition-all duration-200 mt-1">
                    Sign In
                </button>

            </form>

            {{-- Divider --}}
            <div class="flex items-center gap-3 my-6">
                <div class="flex-1 h-px bg-slate-100"></div>
                <span class="text-xs text-slate-300 font-medium">or</span>
                <div class="flex-1 h-px bg-slate-100"></div>
            </div>

            {{-- Register Link --}}
            <p class="text-center text-sm text-slate-500">
                Don't have an account?
                <a href="{{ route('register') }}"
                   class="text-sky-500 font-semibold hover:text-sky-400 transition-colors ml-1">
                    Create account
                </a>
            </p>

        </div>

    </div>
</div>

@endsection
