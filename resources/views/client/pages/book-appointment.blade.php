@extends('client.layouts.master')

@section('title', 'Book Appointment')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<div class="bg-[#0a1f5c] py-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="font-extrabold text-4xl text-white tracking-tight mb-3">
            Book an <span class="text-sky-400">Appointment</span>
        </h1>
        <p class="text-white/45 text-sm mb-6">Fill in your details and confirm your booking instantly</p>

        {{-- Breadcrumb --}}
        <nav class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ route('home') }}" class="text-white/50 hover:text-sky-400 transition-colors font-medium">Home</a>
            <span class="text-white/25">›</span>
            <a href="{{ route('doctors') }}" class="text-white/50 hover:text-sky-400 transition-colors font-medium">Doctors</a>
            <span class="text-white/25">›</span>
            <span class="text-sky-400 font-medium">Doctor name</span>
        </nav>
    </div>
</div>

{{-- ===== CONTENT ===== --}}
<section class="bg-slate-50 py-16 px-6 min-h-[60vh]">
    <div class="max-w-2xl mx-auto">

        {{-- Doctor Card --}}
        <div class="bg-white border border-slate-200 rounded-2xl p-6 mb-6 flex items-center gap-5">
            <img src="{{ $doctor->imageUrl() }}"
                 alt="doctor"
                 class="w-20 h-20 rounded-full object-cover border-2 border-slate-100 shrink-0">
            <div>
                <h4 class="text-base font-bold text-slate-800 mb-1">{{ $doctor->name }}</h4>
                <p class="text-sm text-slate-400 leading-relaxed">
                    {{ $doctor->address }}

                </p>
                <span class="inline-block mt-2 text-xs font-semibold text-sky-500 bg-sky-50
                             border border-sky-100 px-3 py-1 rounded-full">
                    Available for booking
                </span>
            </div>
        </div>

        {{-- Form Card --}}
        <div class="bg-white border border-slate-200 rounded-2xl p-8">

            <h3 class="text-base font-bold text-slate-800 mb-6">Your Details</h3>

            <form method="POST" action="" class="flex flex-col gap-5">
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
                           required
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
                           required
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
                           required
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

                {{-- Divider --}}
                <div class="h-px bg-slate-100 my-1"></div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-[#0a1f5c] text-white text-sm font-bold py-3.5 rounded-xl
                               hover:bg-[#0d2872] active:scale-[0.98] transition-all duration-200">
                    Confirm Booking
                </button>

            </form>
        </div>

    </div>
</section>

@endsection
