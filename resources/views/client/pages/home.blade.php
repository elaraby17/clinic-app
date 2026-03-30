@extends('client.layouts.master')

@section('title', 'home')

@section('content')

{{-- ===== HERO — min-h-screen ===== --}}
<section class="relative min-h-screen bg-[#0a1f5c] flex items-center overflow-hidden">

    {{-- decorative circles --}}
    <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full bg-sky-400/5 pointer-events-none"></div>
    <div class="absolute bottom-0 left-1/3 w-72 h-72 rounded-full bg-sky-400/[0.03] pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-8 pb-28 pt-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        {{-- Text --}}
        <div>
            <div class="inline-flex items-center gap-2 bg-sky-400/10 border border-sky-400/20 rounded-full px-4 py-2 mb-8">
                <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                <span class="text-xs font-medium text-sky-300">Trusted by 2M+ patients</span>
            </div>

            <h1 class="font-extrabold text-5xl lg:text-6xl text-white leading-[1.1] tracking-tight mb-6">
                Have a <span class="text-sky-400">Medical</span><br>
                Question?<br>
                We've Got You.
            </h1>

            <p class="text-white/50 text-base leading-relaxed max-w-md mb-10">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus
                itaque, laborum saepe enim maxime, delectus, dicta cumque error cupiditate nobis
                officia quam perferendis consequatur cum iure quod facere.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('doctors') }}"
                   class="bg-sky-400 text-[#0a1f5c] text-sm font-bold px-7 py-3.5 rounded-xl hover:bg-sky-300 transition-all">
                    Find a Doctor
                </a>
                <a href="#"
                   class="bg-white/7 text-white/80 text-sm font-medium px-7 py-3.5 rounded-xl border border-white/15 hover:bg-white/10 hover:text-white transition-all">
                    How it works
                </a>
            </div>
        </div>

        {{-- Image --}}
        <div class="flex justify-center lg:justify-end">
            <img src="{{ asset('client/assets/images/banner.jpg') }}"
                 alt="banner"
                 class="w-full max-w-lg rounded-2xl border border-white/8 object-cover shadow-2xl">
        </div>
    </div>

    {{-- Stats bar pinned to bottom --}}
    <div class="absolute bottom-0 left-0 right-0 bg-white/[0.04] backdrop-blur-md border-t border-white/[0.07]">
        <div class="max-w-7xl mx-auto px-8 py-5 flex flex-wrap justify-center gap-12">
            <div class="text-center">
                <p class="text-[11px] uppercase tracking-widest text-white/35 mb-1">Active Doctors</p>
                <p class="text-xl font-bold text-white">4,200<span class="text-sky-400">+</span></p>
            </div>
            <div class="text-center">
                <p class="text-[11px] uppercase tracking-widest text-white/35 mb-1">Bookings Today</p>
                <p class="text-xl font-bold text-white">1,840</p>
            </div>
            <div class="text-center">
                <p class="text-[11px] uppercase tracking-widest text-white/35 mb-1">Specialties</p>
                <p class="text-xl font-bold text-white">38</p>
            </div>
            <div class="text-center">
                <p class="text-[11px] uppercase tracking-widest text-white/35 mb-1">Avg. Rating</p>
                <p class="text-xl font-bold text-white">4.9<span class="text-sky-400">★</span></p>
            </div>
        </div>
    </div>

</section>

{{-- ===== MAJORS ===== --}}
<section class="bg-slate-50 py-20 px-8">
    <div class="max-w-7xl mx-auto">

        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Browse by <span class="text-[#0a1f5c]">Specialty</span>
                </h2>
                <p class="text-slate-400 text-sm mt-2">Find the right specialist for your needs</p>
            </div>
            <a href="{{ route('majors') }}" class="text-sm font-semibold text-sky-500 border-b border-sky-300/50 pb-0.5 hover:text-sky-400 transition-colors">
                View all →
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4">

            @foreach($majors as $major)
            <div class="bg-white border border-slate-200 rounded-2xl p-4 flex flex-col items-center gap-3
                        hover:border-sky-400 hover:shadow-lg hover:shadow-sky-100 hover:-translate-y-1
                        transition-all duration-200 group">
                <img src="{{ $major->imageUrl() }}"
                     alt="major"
                     class="w-16 h-16 rounded-full object-cover border-2 border-slate-100 group-hover:border-sky-300 transition-colors">
                <h4 class="text-xs font-semibold text-slate-700 text-center">{{ $major->name }}</h4>
                <a href="{{ route('doctors' , ['major' => $major->slug]) }}"
                   class="w-full text-center text-[11px] font-semibold text-[#0a1f5c] border border-[#0a1f5c]/30
                          py-1.5 rounded-lg group-hover:bg-[#0a1f5c] group-hover:text-white group-hover:border-[#0a1f5c]
                          transition-all">
                    Browse Doctors
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ===== DOCTORS ===== --}}
<section class="bg-white py-20 px-8">
    <div class="max-w-7xl mx-auto">

        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Top <span class="text-[#0a1f5c]">Doctors</span>
                </h2>
                <p class="text-slate-400 text-sm mt-2">Highly rated specialists ready to see you</p>
            </div>
            <a href="{{ route('doctors') }}" class="text-sm font-semibold text-sky-500 border-b border-sky-300/50 pb-0.5 hover:text-sky-400 transition-colors">
                View all →
            </a>
        </div>

        {{-- Splide slider --}}
        <section class="splide home__slider__doctors">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach($doctors as $doctor)
                    <li class="splide__slide px-2">
                        <div class="bg-white border border-slate-200 rounded-2xl p-5 flex flex-col items-center gap-3
                                    hover:border-sky-400 hover:shadow-lg hover:shadow-sky-100 hover:-translate-y-1
                                    transition-all duration-200 group">
                            <img src="{{ $doctor->imageUrl() }}"
                                 alt="doctor"
                                 class="w-20 h-20 rounded-full object-cover border-2 border-slate-100 group-hover:border-sky-300 transition-colors">
                            <div class="text-center">
                                <h4 class="text-sm font-bold text-slate-800">{{ $doctor->name }}</h4>
                                <p class="text-xs text-slate-400 mt-0.5">{{ $doctor->major->name }}</p>
                            </div>
                            <a href="{{ route('book-appointment' , ['doctor' => $doctor->id]) }}"
                               class="w-full text-center text-xs font-semibold text-[#0a1f5c] border border-[#0a1f5c]/30
                                      py-2 px-4 rounded-lg group-hover:bg-[#0a1f5c] group-hover:text-white group-hover:border-[#0a1f5c]
                                      transition-all">
                                Book an appointment
                            </a>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </section>

    </div>
</section>

{{-- ===== INFO + APP BANNER ===== --}}
<section class="bg-[#0a1f5c] py-20 px-8">
    <div class="max-w-7xl mx-auto">

        {{-- Section Header --}}
        <div class="text-center mb-14">
            <h2 class="font-extrabold text-3xl text-white tracking-tight mb-3">
                Everything you need, <span class="text-sky-400">in one place</span>
            </h2>
            <p class="text-sm text-white/40 max-w-md mx-auto leading-relaxed">
                VCare brings your entire healthcare journey together — simply and confidently
            </p>
        </div>

        {{-- Cards Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

            <div class="bg-white/[0.04] border border-white/[0.08] rounded-2xl p-7
                        hover:bg-sky-400/[0.08] hover:border-sky-400/25 hover:-translate-y-1
                        transition-all duration-200 group">
                <div class="w-14 h-14 rounded-2xl bg-sky-400/10 border border-sky-400/15
                            flex items-center justify-center mb-6
                            group-hover:bg-sky-400/20 transition-colors">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                         alt="" class="w-7 h-7">
                </div>
                <h4 class="text-sm font-bold text-white mb-3 leading-snug">
                    everything you need is found at VCare.
                </h4>
                <p class="text-xs text-white/40 leading-relaxed">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you can also order medicine or book a surgery.
                </p>
            </div>

            <div class="bg-white/[0.04] border border-white/[0.08] rounded-2xl p-7
                        hover:bg-sky-400/[0.08] hover:border-sky-400/25 hover:-translate-y-1
                        transition-all duration-200 group">
                <div class="w-14 h-14 rounded-2xl bg-sky-400/10 border border-sky-400/15
                            flex items-center justify-center mb-6
                            group-hover:bg-sky-400/20 transition-colors">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                         alt="" class="w-7 h-7">
                </div>
                <h4 class="text-sm font-bold text-white mb-3 leading-snug">
                    everything you need is found at VCare.
                </h4>
                <p class="text-xs text-white/40 leading-relaxed">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you can also order medicine or book a surgery.
                </p>
            </div>

            <div class="bg-white/[0.04] border border-white/[0.08] rounded-2xl p-7
                        hover:bg-sky-400/[0.08] hover:border-sky-400/25 hover:-translate-y-1
                        transition-all duration-200 group">
                <div class="w-14 h-14 rounded-2xl bg-sky-400/10 border border-sky-400/15
                            flex items-center justify-center mb-6
                            group-hover:bg-sky-400/20 transition-colors">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                         alt="" class="w-7 h-7">
                </div>
                <h4 class="text-sm font-bold text-white mb-3 leading-snug">
                    everything you need is found at VCare.
                </h4>
                <p class="text-xs text-white/40 leading-relaxed">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you can also order medicine or book a surgery.
                </p>
            </div>

            <div class="bg-white/[0.04] border border-white/[0.08] rounded-2xl p-7
                        hover:bg-sky-400/[0.08] hover:border-sky-400/25 hover:-translate-y-1
                        transition-all duration-200 group">
                <div class="w-14 h-14 rounded-2xl bg-sky-400/10 border border-sky-400/15
                            flex items-center justify-center mb-6
                            group-hover:bg-sky-400/20 transition-colors">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                         alt="" class="w-7 h-7">
                </div>
                <h4 class="text-sm font-bold text-white mb-3 leading-snug">
                    everything you need is found at VCare.
                </h4>
                <p class="text-xs text-white/40 leading-relaxed">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you can also order medicine or book a surgery.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ===== APP DOWNLOAD ===== --}}
<section class="bg-slate-50 py-20 px-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-[#0a1f5c] rounded-3xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">

            {{-- Text Side --}}
            <div class="p-12 flex flex-col gap-6 justify-center">
                <div>
                    <h2 class="font-extrabold text-3xl text-white tracking-tight leading-snug mb-3">
                        Download the <span class="text-sky-400">VCare</span> App
                    </h2>
                    <p class="text-sm text-white/45 leading-relaxed max-w-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id,
                        quod explicabo minus ut, sint possimus, fuga voluptas.
                    </p>
                </div>

                <div class="flex flex-col gap-3">
                    <a href="#"
                       class="flex items-center gap-4 bg-white/[0.07] border border-white/[0.12] rounded-2xl
                              px-5 py-4 hover:bg-sky-400/[0.12] hover:border-sky-400/35 transition-all duration-200">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                             alt="" class="w-6 h-6 shrink-0">
                        <div>
                            <p class="text-[10px] text-white/35 mb-0.5">Get it on</p>
                            <p class="text-sm font-bold text-white">Google Play</p>
                        </div>
                    </a>
                    <a href="#"
                       class="flex items-center gap-4 bg-white/[0.07] border border-white/[0.12] rounded-2xl
                              px-5 py-4 hover:bg-sky-400/[0.12] hover:border-sky-400/35 transition-all duration-200">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                             alt="" class="w-6 h-6 shrink-0">
                        <div>
                            <p class="text-[10px] text-white/35 mb-0.5">Download on the</p>
                            <p class="text-sm font-bold text-white">App Store</p>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Image Side --}}
            <div class="relative hidden lg:block">
                <img src="{{ asset('client/assets/images/banner.jpg') }}"
                     alt="app banner"
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0a1f5c] via-[#0a1f5c]/20 to-transparent"></div>
            </div>

        </div>
    </div>
</section>

@endsection



