<nav class="bg-[#0a1f5c]/55 backdrop-blur-lg border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-[72px] flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex flex-col leading-none">
            <span class="font-extrabold text-[26px] text-white tracking-[-1.5px]">
                V<span class="text-sky-400">Care</span>
            </span>
            <span class="text-[10px] font-medium text-white/35 uppercase tracking-[0.12em] mt-0.5">
                Your Health, Our Priority
            </span>
        </a>

        {{-- Desktop Links --}}
        <div class="hidden md:flex items-center gap-1">
            <a href="{{ route('home') }}"
               class="relative text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200
                      {{ request()->routeIs('home')
                            ? 'text-white bg-sky-400/10'
                            : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Home
                @if(request()->routeIs('home'))
                    <span class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-[2.5px] bg-sky-400 rounded-full"></span>
                @endif
            </a>

            <a href="{{ route('majors') }}"
               class="relative text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200
                      {{ request()->routeIs('majors')
                            ? 'text-white bg-sky-400/10'
                            : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Majors
                @if(request()->routeIs('majors'))
                    <span class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-[2.5px] bg-sky-400 rounded-full"></span>
                @endif
            </a>

            <a href="{{ route('doctors') }}"
               class="relative text-sm font-medium px-4 py-2 rounded-lg transition-all duration-200
                      {{ request()->routeIs('doctors')
                            ? 'text-white bg-sky-400/10'
                            : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Doctors
                @if(request()->routeIs('doctors'))
                    <span class="absolute bottom-1.5 left-1/2 -translate-x-1/2 w-5 h-[2.5px] bg-sky-400 rounded-full"></span>
                @endif
            </a>
        </div>

        {{-- Auth Buttons --}}
        @guest


        <div class="hidden md:flex items-center gap-3">
            <a href="{{ route('login') }}"
               class="text-sm font-medium text-white/80 px-5 py-2.5 rounded-lg border border-white/20
                      hover:text-white hover:border-white/50 hover:bg-white/5 transition-all duration-200">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="text-sm font-bold text-[#0a1f5c] px-5 py-2.5 rounded-lg bg-sky-400
                      hover:bg-sky-300 transition-all duration-200">
                Register
            </a>
        </div>
         @endguest
            @auth
              <a href="{{ route('logout') }}"
               class="text-sm font-bold text-[#0a1f5c] px-5 py-2.5 rounded-lg bg-sky-400
                      hover:bg-sky-300 transition-all duration-200">
                Logout
            </a>
          @endauth

        {{-- Mobile Hamburger --}}
        <button id="nav-toggle"
                class="md:hidden flex flex-col justify-center gap-[5px] w-9 h-9 rounded-lg
                       hover:bg-white/10 transition-all p-2"
                aria-label="Toggle menu">
            <span id="bar1" class="block w-full h-[2px] bg-white rounded transition-all duration-300"></span>
            <span id="bar2" class="block w-full h-[2px] bg-white rounded transition-all duration-300"></span>
            <span id="bar3" class="block w-full h-[2px] bg-white rounded transition-all duration-300"></span>
        </button>

    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
         class="md:hidden hidden border-t border-white/10 bg-[#0a1f5c]">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col gap-1">

            <a href="{{ route('home') }}"
               class="text-sm font-medium px-4 py-3 rounded-lg transition-all
                      {{ request()->routeIs('home') ? 'text-white bg-sky-400/10' : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Home
            </a>
            <a href="{{ route('majors') }}"
               class="text-sm font-medium px-4 py-3 rounded-lg transition-all
                      {{ request()->routeIs('majors') ? 'text-white bg-sky-400/10' : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Majors
            </a>
            <a href="{{ route('doctors') }}"
               class="text-sm font-medium px-4 py-3 rounded-lg transition-all
                      {{ request()->routeIs('doctors') ? 'text-white bg-sky-400/10' : 'text-white/60 hover:text-white hover:bg-white/8' }}">
                Doctors
            </a>

            <div class="border-t border-white/10 my-2"></div>

            <a href="{{ route('login') }}"
               class="text-sm font-medium text-white/80 px-4 py-3 rounded-lg border border-white/20
                      text-center hover:border-white/40 hover:text-white transition-all">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="text-sm font-bold text-[#0a1f5c] px-4 py-3 rounded-lg bg-sky-400
                      text-center hover:bg-sky-300 transition-all">
                Register
            </a>

        </div>
    </div>
</nav>
