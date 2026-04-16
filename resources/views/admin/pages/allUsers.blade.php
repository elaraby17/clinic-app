@extends('admin.layouts.master')

@section('title-dashboard', 'All Users')

@section('content-dashboard')
    <div class="container p-5 mx-auto">
        <h1 class="text-center mb-4 text-2xl font-bold">All Users</h1>
        {{-- Search + Per Page --}}
        <form method="GET" action="{{ request()->url() }}" class="flex items-center gap-3 mb-6">

            {{-- Search Input --}}
            <div class="relative flex-1">
                <input type="text" name="search" value="{{ $search }}"
                    placeholder="ابحث بالاسم أو الإيميل أو الهاتف..."
                    class="w-[50%] bg-slate-800 border border-slate-700 rounded-lg py-2 px-4 pr-10  text-sm text-slate-200 placeholder-slate-500 focus:outline-none focus:border-cyan-500" />
                <svg class="absolute right-3 top-2.5 w-4 h-4 text-slate-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z" />
                </svg>
            </div>

            {{-- Per Page Select --}}
            <select name="per_page" onchange="this.form.submit()"
                class="bg-slate-800 border border-slate-700 rounded-lg py-2 px-3 text-sm text-slate-200 focus:outline-none focus:border-cyan-500">
                @foreach ([10, 20, 50, 100] as $option)
                    <option value="{{ $option }}" {{ $perPage == $option ? 'selected' : '' }}>
                        {{ $option }} per page
                    </option>
                @endforeach
            </select>

            <button type="submit"
                class="bg-cyan-600 hover:bg-cyan-500 text-white text-sm px-4 py-2 rounded-lg transition-colors">
                بحث
            </button>

            @if ($search)
                <a href="{{ request()->url() }}" class="text-slate-400 hover:text-slate-200 text-sm transition-colors">
                    مسح
                </a>
            @endif

        </form>

        {{-- Table --}}
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-slate-700">
                    <th class="text-right py-3 px-4 text-slate-400 font-medium">ID</th>
                    <th class="text-right py-3 px-4 text-slate-400 font-medium">Name</th>
                    <th class="text-right py-3 px-4 text-slate-400 font-medium">Email</th>
                    <th class="text-right py-3 px-4 text-slate-400 font-medium">Phone</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="border-b border-slate-700/50 hover:bg-slate-700/30 transition-all group">
                        <td class="py-4 px-4 text-slate-400">{{ $user->id }}</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500 flex items-center justify-center font-bold">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <span class="font-medium"> {{ $user->name }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-slate-400">{{ $user->email }}</td>
                        <td class="py-4 px-4 text-slate-400">{{ $user->phone }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-8 text-slate-400">
                            @if ($search)
                                لا توجد نتائج لـ "{{ $search }}"
                            @else
                                لا يوجد مستخدمون.
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination Links --}}
        <div class="mt-4 flex items-center justify-between text-sm text-slate-400">
            <span>
                عرض {{ $users->firstItem() ?? 0 }} - {{ $users->lastItem() ?? 0 }}
                من {{ $users->total() }} نتيجة
            </span>
            {{ $users->links() }}
        </div>
    </div>
@endsection
