@extends('admin.layouts.master')

@section('title-dashboard', 'Dashboard')

@section('content-dashboard')
    <div class="p-6 space-y-6">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Stat Card 1 -->
            <div
                class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-slate-800 to-slate-900 border border-cyan-500/20 p-6 hover:border-cyan-400/50 transition-all cursor-pointer">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-3xl">👨‍⚕️</span>
                        <i
                            class="fas fa-arrow-trend-up text-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Active Doctors</p>
                    <p class="text-3xl font-bold mt-2">{{ $doctorsCount }}</p>
                    <div
                        class="mt-4 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full w-0 group-hover:w-full transition-all duration-500">
                    </div>
                </div>
            </div>

            <!-- Stat Card 2 -->
            <div
                class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-slate-800 to-slate-900 border border-cyan-500/20 p-6 hover:border-cyan-400/50 transition-all cursor-pointer">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-3xl">📅</span>
                        <i
                            class="fas fa-arrow-trend-up text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Bookings Today</p>
                    <p class="text-3xl font-bold mt-2">156</p>
                    <div
                        class="mt-4 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full w-0 group-hover:w-full transition-all duration-500">
                    </div>
                </div>
            </div>

            <!-- Stat Card 3 -->
            <div
                class="group relative overflow-hidden rounded-xl bg-gradient-to-br from-slate-800 to-slate-900 border border-cyan-500/20 p-6 hover:border-cyan-400/50 transition-all cursor-pointer">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-3xl">👥</span>
                        <i
                            class="fas fa-arrow-trend-up text-indigo-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div>
                    <p class="text-slate-400 text-sm font-medium">Total Patients</p>
                    <p class="text-3xl font-bold mt-2">{{ $usersCount }}</p>
                    <div
                        class="mt-4 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full w-0 group-hover:w-full transition-all duration-500">
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Bookings -->
            <div
                class="lg:col-span-2 bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-6 hover:border-cyan-400/50 transition-all">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-xl font-bold">Recent Bookings</h2>
                        <p class="text-slate-400 text-sm mt-1">Latest appointment requests</p>
                    </div>
                    <button class="text-cyan-400 hover:text-cyan-300 text-sm font-medium">
                        View All <i class="fas fa-chevron-right ml-1"></i>
                    </button>
                </div>

                <div class="space-y-3">
                    <div
                        class="flex items-center justify-between p-4 bg-slate-700/30 hover:bg-slate-700/50 border border-slate-600/50 rounded-lg transition-all group">
                        <div class="flex-1">
                            <p class="font-medium">Ahmed Mohamed</p>
                            <p class="text-slate-400 text-sm">Dr. Ziad Ali • Cardiology</p>
                        </div>
                        <div class="flex items-center gap-6">
                            <span class="text-slate-400 text-sm">10:30 AM</span>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">Confirmed</span>
                            <button
                                class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-white transition-all">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 bg-slate-700/30 hover:bg-slate-700/50 border border-slate-600/50 rounded-lg transition-all group">
                        <div class="flex-1">
                            <p class="font-medium">Fatima Hassan</p>
                            <p class="text-slate-400 text-sm">Dr. Sara Elsayed • Dermatology</p>
                        </div>
                        <div class="flex items-center gap-6">
                            <span class="text-slate-400 text-sm">11:00 AM</span>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-400">Pending</span>
                            <button
                                class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-white transition-all">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 bg-slate-700/30 hover:bg-slate-700/50 border border-slate-600/50 rounded-lg transition-all group">
                        <div class="flex-1">
                            <p class="font-medium">Mohamed Ali</p>
                            <p class="text-slate-400 text-sm">Dr. Hoda Sultan • Dentistry</p>
                        </div>
                        <div class="flex items-center gap-6">
                            <span class="text-slate-400 text-sm">2:00 PM</span>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">Confirmed</span>
                            <button
                                class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-white transition-all">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 bg-slate-700/30 hover:bg-slate-700/50 border border-slate-600/50 rounded-lg transition-all group">
                        <div class="flex-1">
                            <p class="font-medium">Layla Ibrahim</p>
                            <p class="text-slate-400 text-sm">Dr. Ahmed Mohamed • Neurology</p>
                        </div>
                        <div class="flex items-center gap-6">
                            <span class="text-slate-400 text-sm">3:30 PM</span>
                            <span
                                class="px-3 py-1 rounded-full text-xs font-medium bg-blue-500/20 text-blue-400">Completed</span>
                            <button
                                class="opacity-0 group-hover:opacity-100 text-slate-400 hover:text-white transition-all">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specialties -->
            <div
                class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-6 hover:border-cyan-400/50 transition-all">
                <h2 class="text-xl font-bold mb-6">Top Specialties</h2>
                <div class="space-y-4">
                    @foreach ($majorsTop as $major)
                        <div class="group">
                            <div class="flex items-center justify-between mb-2">
                                <p class="font-medium">{{ $major->name }}</p>
                                <p class="text-cyan-400 text-sm font-bold">{{ $major->doctors_count }} doctors</p>
                            </div>
                            <div class="h-2 bg-slate-700/50 rounded-full overflow-hidden">
                                <div
                                    class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full w-4/5 transition-all duration-500 group-hover:shadow-lg group-hover:shadow-cyan-500/50">
                                </div>
                            </div>
                            <p class="text-slate-400 text-xs mt-1">450 patients</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Doctors Table -->
    <div
        class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-10 hover:border-cyan-400/50 transition-all">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-xl font-bold">Active Doctors</h2>
                <p class="text-slate-400 text-sm mt-1">Currently available specialists</p>
            </div>
            <button
                class="px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 rounded-lg font-medium transition-all shadow-lg shadow-cyan-500/50">
                <a href="{{ route('admin.add-doctors') }}"> Add Doctor</a>
            </button>
        </div>

        <div class="overflow-x-auto rounded-lg border border-slate-700/50">
            <table class="w-full text-sm ">
                <thead>
                    <tr class="border-b border-slate-700">
                        <th class="text-right py-3 px-4 text-slate-400 font-medium">Doctor</th>
                        <th class="text-right py-3 px-4 text-slate-400 font-medium">Specialty</th>
                        <th class="text-right py-3 px-4 text-slate-400 font-medium">Patients</th>
                        <th class="text-right py-3 px-4 text-slate-400 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($allDoctors as $doctor)
                        <tr class="border-b border-slate-700/50 hover:bg-slate-700/30 transition-all group">
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500 flex items-center justify-center font-bold">
                                     <img src="{{ $doctor->image }}" alt="doctor image" class="w-full h-full object-cover rounded-full">
                                    </div>
                                    <span class="font-medium">Dr. {{ $doctor->name }}</span>
                                </div>
                            </td>
                            <td class="py-4 px-4 text-slate-400">{{ $doctor->major->name }}</td>
                            <td class="py-4 px-4 font-medium">156</td>
                            @if ($doctor->status === 'active')
                                <td class="py-4 px-4"><span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
                                </td>
                            @else
                                <td class="py-4 px-4"><span class="inline-block w-3 h-3 rounded-full bg-red-500"></span>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-slate-400">No doctors found.</td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
