       <div id="sidebar" class="w-64 bg-gradient-to-b from-slate-800 to-slate-900 border-r border-cyan-500/20 transition-all duration-300 flex flex-col shadow-2xl">
            <!-- Logo -->
            <div class="p-6 border-b border-cyan-500/20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-cyan-400 to-blue-500 rounded-lg flex items-center justify-center font-bold">V</div>
                    <span class="font-bold text-lg">Care</span>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2">
                <button class="nav-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-lg shadow-cyan-500/50 transition-all">
                    <i class="fas fa-home"></i>
                    <a href="{{ route('admin.dashboard') }}" class="text-white">Dashboard</a>
                </button>
                <button class="nav-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/50 transition-all">
                    <i class="fas fa-users"></i>
                    <span>Doctors</span>
                </button>
                <button class="nav-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/50 transition-all">
                    <i class="fas fa-calendar"></i>
                    <span>Appointments</span>
                </button>
                <button class="nav-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/50 transition-all">
                    <i class="fas fa-chart-line"></i>
                    <span>Analytics</span>
                </button>
                <button class="nav-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-white hover:bg-slate-700/50 transition-all">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </button>
            </nav>

            <!-- Logout -->
            <div class="p-4 border-t border-cyan-500/20">
                <button class="w-full flex items-center gap-3 px-4 py-3 rounded-lg bg-red-500/10 hover:bg-red-500/20 text-red-400 transition-all">
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="{{ route('logout') }}" class="text-red-400 hover:text-red-300">Logout</a>
                </button>
            </div>

            <!-- Toggle -->
            <div class="p-4 border-t border-cyan-500/20">
                <button id="toggleBtn" class="w-full p-3 bg-slate-700/50 hover:bg-slate-700 rounded-lg text-cyan-400 transition-all">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
