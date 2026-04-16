@extends('admin.layouts.master')

@section('title-dashboard', 'Add Doctors')

@section('content-dashboard')
<div class="bg-slate-800/50 backdrop-blur border-b border-cyan-500/20 p-6 sticky top-0 z-40">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.dashboard') }}" class="p-2 hover:bg-slate-700 rounded-lg transition-all text-slate-400 hover:text-cyan-400">
                <i class="fas fa-arrow-left text-2xl"></i>
            </a>
            <div>
                <h1 class="text-3xl font-bold">إضافة دكتور جديد</h1>
                <p class="text-slate-400 mt-1">تسجيل طبيب جديد في النظام</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto p-6">
        <!-- Success Message -->
        <div id="successMsg" class="hidden mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-lg flex items-center gap-3 animate-in fade-in slide-in-from-top">
            <i class="fas fa-check-circle text-green-400 text-2xl"></i>
            <div>
                <p class="text-green-400 font-medium">تم إضافة الدكتور بنجاح!</p>
                <p class="text-green-300 text-sm">تم إنشاء ملف الدكتور الجديد في النظام.</p>
            </div>
        </div>

        <!-- Form Container -->
        <form id="doctorForm" class="space-y-6">
            <!-- Personal Information -->
            <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-8 hover:border-cyan-400/50 transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <i class="fas fa-user text-cyan-400 text-2xl"></i>
                    <h2 class="text-2xl font-bold">المعلومات الشخصية</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div>
                        <label class="block text-white font-medium mb-2">الاسم  *</label>
                        <input
                            type="text"
                            name="name"
                            placeholder="أحمد"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all error-field"
                        />
                        <span class="text-red-400 text-sm mt-1 hidden error-message"></span>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-white font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-envelope text-cyan-400"></i>
                            البريد الإلكتروني *
                        </label>
                        <input
                            type="email"
                            name="email"
                            placeholder="doctor@example.com"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all error-field"
                        />
                        <span class="text-red-400 text-sm mt-1 hidden error-message"></span>
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-white font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-phone text-cyan-400"></i>
                            رقم الهاتف *
                        </label>
                        <input
                            type="tel"
                            name="phone"
                            placeholder="+20 123 456 7890"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all error-field"
                        />
                        <span class="text-red-400 text-sm mt-1 hidden error-message"></span>
                    </div>

                    <!-- Location -->
                    <div class="md:col-span-2">
                        <label class="block text-white font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-cyan-400"></i>
                            الموقع
                        </label>
                        <input
                            type="text"
                            name="location"
                            placeholder="القاهرة، مصر"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all"
                        />
                    </div>
                </div>
            </div>

            <!-- Professional Information -->
            <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-8 hover:border-cyan-400/50 transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <i class="fas fa-award text-cyan-400 text-2xl"></i>
                    <h2 class="text-2xl font-bold">المعلومات المهنية</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Specialization -->
                    <div>
                        <label class="block text-white font-medium mb-2">التخصص *</label>
                        <select name="specialization" class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white outline-none focus:ring-2 focus:ring-cyan-500 transition-all error-field">
                            <option value="">اختر التخصص</option>
                            <option value="Cardiology" class="bg-slate-800">أمراض القلب</option>
                            <option value="Dermatology" class="bg-slate-800">الجلدية</option>
                            <option value="Neurology" class="bg-slate-800">الأعصاب</option>
                            <option value="Dentistry" class="bg-slate-800">طب الأسنان</option>
                            <option value="Orthopedics" class="bg-slate-800">العظام</option>
                            <option value="Pediatrics" class="bg-slate-800">الأطفال</option>
                            <option value="Psychiatry" class="bg-slate-800">الطب النفسي</option>
                            <option value="Ophthalmology" class="bg-slate-800">طب العيون</option>
                        </select>
                        <span class="text-red-400 text-sm mt-1 hidden error-message"></span>
                    </div>


                    <!-- Consultation Fee -->
                    {{-- <div>
                        <label class="block text-white font-medium mb-2 flex items-center gap-2">
                            <i class="fas fa-dollar-sign text-cyan-400"></i>
                            رسوم الاستشارة (جنيه) *
                        </label>
                        <input
                            type="number"
                            name="consultationFee"
                            placeholder="500"
                            min="0"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all error-field"
                        />
                        <span class="text-red-400 text-sm mt-1 hidden error-message"></span>
                    </div> --}}


                    <!-- Bio -->
                    <div class="md:col-span-2">
                        <label class="block text-white font-medium mb-2">السيرة الذاتية المهنية</label>
                        <textarea
                            name="bio"
                            placeholder="نبذة مختصرة عن التاريخ المهني..."
                            rows="4"
                            class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-lg text-white placeholder-slate-500 outline-none focus:ring-2 focus:ring-cyan-500 transition-all resize-none"
                        ></textarea>
                    </div>
                </div>
            </div>

            <!-- Upload Image -->
            <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl border border-cyan-500/20 p-8 hover:border-cyan-400/50 transition-all">
                <label class="block text-white font-medium mb-4">صورة الملف الشخصي</label>
                <div class="border-2 border-dashed border-cyan-500/30 hover:border-cyan-500/50 rounded-lg p-8 text-center transition-all cursor-pointer group">
                    <input
                        type="file"
                        accept="image/*"
                        id="imageInput"
                        class="hidden"
                    />
                    <label for="imageInput" class="cursor-pointer">
                        <div class="flex flex-col items-center gap-3 group-hover:text-cyan-400 transition-colors">
                            <div class="text-4xl">📷</div>
                            <p class="text-white font-medium">اختر صورة الملف الشخصي</p>
                            <p class="text-slate-400 text-sm">PNG, JPG حتى 5MB</p>
                        </div>
                    </label>
                    <p id="fileName" class="text-cyan-400 text-sm mt-3 hidden">✓ <span></span></p>
                </div>
            </div>

            <!-- Info Alert -->
            <div class="bg-blue-500/10 border border-blue-500/30 rounded-lg p-4 flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-400 mt-1"></i>
                <div>
                    <p class="text-blue-400 font-medium">جميع الحقول المعلمة بـ * مطلوبة</p>
                    <p class="text-blue-300 text-sm mt-1">تأكد من صحة جميع المعلومات قبل الإرسال.</p>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex gap-4 pt-6">
                <button
                    type="submit"
                    class="flex-1 px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white font-bold rounded-lg transition-all shadow-lg shadow-cyan-500/50 hover:shadow-cyan-600/50 transform hover:scale-105"
                >
                    إضافة دكتور
            </button>
            </div>
        </form>
    </div>

    @endsection
