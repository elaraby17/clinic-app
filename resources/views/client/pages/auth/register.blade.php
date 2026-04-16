@extends('client.layouts.master')

@section('title', 'Register')

@section('content')

<div class="min-h-screen bg-slate-50 flex items-center justify-center px-4 py-16">
    <div class="w-full max-w-md">

        {{-- Card --}}
        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm p-8">

            {{-- Header --}}
            <div class="text-center mb-8">
                <a href="{{ route('home') }}" class="inline-block font-extrabold text-3xl text-[#0a1f5c] tracking-tight mb-2">
                    V<span class="text-sky-400">Care</span>
                </a>
                <h2 class="text-xl font-bold text-slate-800 mb-1">Create your account</h2>
                <p class="text-sm text-slate-400">Join VCare and book your appointments easily</p>
            </div>

            {{-- Breadcrumb --}}
            <nav class="flex items-center justify-center gap-2 text-xs mb-8">
                <a href="{{ route('home') }}" class="text-slate-400 hover:text-sky-500 transition-colors">Home</a>
                <span class="text-slate-300">›</span>
                <span class="text-sky-500 font-medium">Register</span>
            </nav>

            {{-- Form --}}
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
                @csrf

                {{-- Name --}}
                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-sm font-semibold text-slate-700">
                        Name <span class="text-red-400">*</span>
                    </label>
                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Your full name"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-800
                                  placeholder-slate-300 bg-slate-50 outline-none
                                  focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-400/15
                                  transition-all duration-200
                                  @error('name') border-red-400 bg-red-50 @enderror">
                    @error('name')
                        <p class="text-xs text-red-500 mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Phone --}}
                <div class="flex flex-col gap-1.5">
                    <label for="phone" class="text-sm font-semibold text-slate-700">
                        Phone <span class="text-red-400">*</span>
                    </label>
                    <input type="tel"
                           id="phone"
                           name="phone"
                           value="{{ old('phone') }}"
                           placeholder="+20 1XX XXX XXXX"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-800
                                  placeholder-slate-300 bg-slate-50 outline-none
                                  focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-400/15
                                  transition-all duration-200
                                  @error('phone') border-red-400 bg-red-50 @enderror">
                    @error('phone')
                        <p class="text-xs text-red-500 mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

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

                {{-- Confirm Password --}}
                <div class="flex flex-col gap-1.5">
                    <label for="password_confirmation" class="text-sm font-semibold text-slate-700">
                        Confirm Password <span class="text-red-400">*</span>
                    </label>
                    <input type="password"
                           id="password_confirmation"
                           name="password_confirmation"
                           placeholder="••••••••"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm text-slate-800
                                  placeholder-slate-300 bg-slate-50 outline-none
                                  focus:border-sky-400 focus:bg-white focus:ring-2 focus:ring-sky-400/15
                                  transition-all duration-200
                                  @error('password_confirmation') border-red-400 bg-red-50 @enderror">
                    @error('password')
                        <p class="text-xs text-red-500 mt-0.5">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-[#0a1f5c] text-white text-sm font-bold py-3.5 rounded-xl
                               hover:bg-[#0d2872] active:scale-[0.98] transition-all duration-200 mt-1">
                    Create Account
                </button>

            </form>

            {{-- Divider --}}
            <div class="flex items-center gap-3 my-6">
                <div class="flex-1 h-px bg-slate-100"></div>
                <span class="text-xs text-slate-300 font-medium">or</span>
                <div class="flex-1 h-px bg-slate-100"></div>
            </div>

            {{-- Login Link --}}
            <p class="text-center text-sm text-slate-500">
                Already have an account?
                <a href="{{ route('login') }}"
                   class="text-sky-500 font-semibold hover:text-sky-400 transition-colors ml-1">
                    Sign in
                </a>
            </p>

        </div>

    </div>
</div>

@endsection
