<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('admin.layouts.partials.head')
</head>

<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 text-white overflow-x-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.layouts.partials.sidebar')
        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Top Bar -->
            @include('admin.layouts.partials.header')
            <!-- Content -->
            @yield('content-dashboard')
        </div>
    </div>

    @include('admin.layouts.partials.script')
</body>

</html>
