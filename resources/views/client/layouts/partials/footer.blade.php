<script>
    const toggle = document.getElementById('nav-toggle');
    const menu   = document.getElementById('mobile-menu');
    const bar1   = document.getElementById('bar1');
    const bar2   = document.getElementById('bar2');
    const bar3   = document.getElementById('bar3');
    let open = false;

    toggle.addEventListener('click', () => {
        open = !open;
        menu.classList.toggle('hidden', !open);
        bar1.style.transform = open ? 'translateY(7px) rotate(45deg)' : '';
        bar2.style.opacity   = open ? '0' : '1';
        bar3.style.transform = open ? 'translateY(-7px) rotate(-45deg)' : '';
    });
</script>


{{-- ============================================================
     FOOTER  — resources/views/client/layouts/partials/footer.blade.php
     ============================================================ --}}

<footer class="bg-[#0a1f5c]">

    {{-- Main Grid --}}
    <div class="max-w-7xl mx-auto px-8 pt-14 pb-10 grid grid-cols-1 md:grid-cols-3 gap-12
                border-b border-white/[0.07]">

        {{-- Brand --}}
        <div>
            <a href="{{ route('home') }}" class="inline-flex flex-col leading-none mb-5">
                <span class="font-extrabold text-2xl text-white tracking-[-1px]">
                    V<span class="text-sky-400">Care</span>
                </span>
                <span class="text-[10px] font-medium text-white/30 uppercase tracking-[0.12em] mt-1">
                    Your Health, Our Priority
                </span>
            </a>
            <p class="text-sm text-white/40 leading-relaxed max-w-[260px]">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus
                itaque, laborum saepe enim maxime, delectus, dicta cumque error cupiditate nobis
                officia quam perferendis consequatur cum iure quod facere.
            </p>
        </div>

        {{-- Links --}}
        <div>
            <h5 class="text-[11px] font-semibold text-white/30 uppercase tracking-[0.1em] mb-5">
                Links
            </h5>
            <ul class="space-y-3">
                <li><a href="{{ route('home') }}"     class="text-sm text-white/55 hover:text-sky-400 transition-colors">Home</a></li>
                <li><a href="{{ route('majors') }}"   class="text-sm text-white/55 hover:text-sky-400 transition-colors">Majors</a></li>
                <li><a href="{{ route('doctors') }}"  class="text-sm text-white/55 hover:text-sky-400 transition-colors">Doctors</a></li>
                <li><a href="{{ route('login') }}"    class="text-sm text-white/55 hover:text-sky-400 transition-colors">Login</a></li>
                <li><a href="{{ route('register') }}" class="text-sm text-white/55 hover:text-sky-400 transition-colors">Register</a></li>
                <li><a href="{{ route('contact') }}"  class="text-sm text-white/55 hover:text-sky-400 transition-colors">Contact</a></li>
            </ul>
        </div>

        {{-- Company --}}
        <div>
            <h5 class="text-[11px] font-semibold text-white/30 uppercase tracking-[0.1em] mb-5">
                Company
            </h5>
            <ul class="space-y-3">
                <li><a href="#" class="text-sm text-white/55 hover:text-sky-400 transition-colors">About Us</a></li>
                <li><a href="#" class="text-sm text-white/55 hover:text-sky-400 transition-colors">How it works</a></li>
                <li><a href="#" class="text-sm text-white/55 hover:text-sky-400 transition-colors">Privacy Policy</a></li>
                <li><a href="#" class="text-sm text-white/55 hover:text-sky-400 transition-colors">Terms of Use</a></li>
            </ul>
        </div>

    </div>

    {{-- Bottom Bar --}}
    <div class="max-w-7xl mx-auto px-8 py-5 flex flex-col sm:flex-row justify-between items-center gap-3">
        <p class="text-xs text-white/25">© {{ date('Y') }} VCare. All rights reserved.</p>
        <p class="text-xs text-white/25">Made with care for your health</p>
    </div>

</footer>
 