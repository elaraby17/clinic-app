@extends('client.layouts.master')

@section('title', 'Doctors')

@section('content')

{{-- ===== PAGE HEADER ===== --}}
<div class="bg-[#0a1f5c] py-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="font-extrabold text-4xl text-white tracking-tight mb-3">
            Our <span class="text-sky-400">Doctors</span>
        </h1>
        <p class="text-white/45 text-sm mb-6">Browse our verified specialists and book your appointment instantly</p>

        {{-- Breadcrumb --}}
        <nav class="flex items-center justify-center gap-2 text-sm">
            <a href="{{ route('home') }}" class="text-white/50 hover:text-sky-400 transition-colors font-medium">
                Home
            </a>
            <span class="text-white/25">›</span>
            <span class="text-sky-400 font-medium">Doctors</span>
        </nav>
    </div>
</div>

{{-- ===== DOCTORS GRID ===== --}}
<section class="bg-slate-50 py-16 px-6 min-h-[60vh]">
    <div class="max-w-7xl mx-auto">

        @forelse ($doctors as $doctor)

            @if ($loop->first)
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-5">
            @endif

                <div class="bg-white border border-slate-200 rounded-2xl p-5 flex flex-col items-center gap-3
                            hover:border-sky-400 hover:shadow-lg hover:shadow-sky-100 hover:-translate-y-1
                            transition-all duration-200 group">

                    {{-- Avatar --}}
                    <img src="{{ $doctor->imageUrl() }}"
                         alt="{{ $doctor->name }}"
                         class="w-20 h-20 rounded-full object-cover border-2 border-slate-100
                                group-hover:border-sky-300 transition-colors duration-200">

                    {{-- Info --}}
                    <div class="text-center">
                        <h4 class="text-sm font-bold text-slate-800 leading-snug">
                            {{ $doctor->name }}
                        </h4>
                        <p class="text-xs font-medium text-sky-500 mt-1">
                            {{ $doctor->major->name }}
                        </p>
                    </div>

                    {{-- Book Button --}}
                    <a href="{{ route('book-appointment', ['doctor' => $doctor->id]) }}"
                       class="w-full text-center text-xs font-semibold text-[#0a1f5c] border border-[#0a1f5c]/30
                              py-2 rounded-lg group-hover:bg-[#0a1f5c] group-hover:text-white
                              group-hover:border-[#0a1f5c] transition-all duration-200">
                        Book an appointment
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
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h4 class="text-lg font-bold text-slate-400">No doctors found.</h4>
                <p class="text-sm text-slate-400">Check back later for available specialists.</p>
            </div>

        @endforelse

        {{-- Pagination --}}

            <div class="mt-12  ">
                {{ $doctors->links() }}
            </div>


    </div>
</section>

@endsection
