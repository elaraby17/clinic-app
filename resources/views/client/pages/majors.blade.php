@extends('client.layouts.master')

@section('title', 'Majors')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<div class="bg-[#0a1f5c] py-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="font-extrabold text-4xl text-white tracking-tight mb-3">
            Medical <span class="text-sky-400">Specialties</span>
        </h1>
        <p class="text-white/45 text-sm mb-6">Browse all available specialties and find the right doctor for you</p>

        {{-- Breadcrumb --}}
        <nav class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ route('home') }}" class="text-white/50 hover:text-sky-400 transition-colors font-medium">
                Home
            </a>
            <span class="text-white/25">›</span>
            <span class="text-sky-400 font-medium">Majors</span>
        </nav>
    </div>
</div>

{{-- ===== MAJORS GRID ===== --}}
<section class="bg-slate-50 py-16 px-6 min-h-[60vh]">
    <div class="max-w-7xl mx-auto">

        @forelse ($majors as $major)

            @if ($loop->first)
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-5">
            @endif

                <div class="bg-white border border-slate-200 rounded-2xl p-5 flex flex-col items-center gap-3
                            hover:border-sky-400 hover:shadow-lg hover:shadow-sky-100 hover:-translate-y-1
                            transition-all duration-200 group">

                    <img src="{{ $major->imageUrl() }}"
                         alt="{{ $major->name }}"
                         class="w-20 h-20 rounded-full object-cover border-2 border-slate-100
                                group-hover:border-sky-300 transition-colors duration-200">

                    <h4 class="text-sm font-bold text-slate-800 text-center leading-snug">
                        {{ $major->name }}
                    </h4>

                    <a href="{{ route('doctors' , ['major' => $major->slug]) }}"
                       class="w-full text-center text-xs font-semibold text-[#0a1f5c] border border-[#0a1f5c]/30
                              py-2 rounded-lg group-hover:bg-[#0a1f5c] group-hover:text-white
                              group-hover:border-[#0a1f5c] transition-all duration-200">
                        Browse Doctors
                    </a>
                </div>

            @if ($loop->last)
                </div>
            @endif

        @empty

            <div class="flex flex-col items-center justify-center py-24 gap-4">
                <div class="w-16 h-16 rounded-full bg-slate-100 flex items-center justify-center">
                    <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-slate-400">No majors found.</h4>
                <p class="text-sm text-slate-400">Check back later for available specialties.</p>
            </div>

        @endforelse




    </div>
</section>

@endsection
