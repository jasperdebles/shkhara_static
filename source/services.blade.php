@extends('_layouts.main')

@section('body')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div x-data="{ activeService: null }" class="min-h-screen bg-gradient-to-br from-slate-50 to-sky-50 py-20">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h1 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-sky-900 to-slate-900 bg-clip-text text-transparent mb-6">
                Our Services
            </h1>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                Customized to your needs
            </p>
        </div>

        <!-- 3x3 Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-24">
            <div @click="activeService = 'backend'" 
                 :class="activeService === 'backend' ? 'ring-4 ring-sky-400 shadow-2xl scale-105' : 'hover:scale-105 hover:shadow-xl'"
                 class="service-card bg-white/70 backdrop-blur-xl p-10 rounded-3xl border border-white/50 cursor-pointer transition-all duration-500 h-20 flex items-center justify-center group">
                <h3 class="text-2xl font-bold text-center group-hover:text-sky-950">Backend Development</h3>
            </div>

            <div @click="activeService = 'frontend'" 
                 :class="activeService === 'frontend' ? 'ring-4 ring-sky-400 shadow-2xl scale-105' : 'hover:scale-105 hover:shadow-xl'"
                 class="service-card bg-white/70 backdrop-blur-xl p-10 rounded-3xl border border-white/50 cursor-pointer transition-all duration-500 h-20 flex items-center justify-center group">
                <h3 class="text-2xl font-bold text-center group-hover:text-sky-950">Frontend Development</h3>
            </div>

            <div @click="activeService = 'uiux'" 
                 :class="activeService === 'uiux' ? 'ring-4 ring-sky-400 shadow-2xl scale-105' : 'hover:scale-105 hover:shadow-xl'"
                 class="service-card bg-white/70 backdrop-blur-xl p-10 rounded-3xl border border-white/50 cursor-pointer transition-all duration-500 h-20 flex items-center justify-center group">
                <h3 class="text-2xl font-bold text-center group-hover:text-sky-950">UI / UX</h3>
            </div>

            <!-- Herhaal voor UI/UX, Web Dev, Consultancy, Projects, AI, Security, Applications -->
            <!-- Zie volledige code in volgende bericht als nodig -->
        </div>

        <!-- Dynamic Detail Section (onderaan) -->
        <div x-show="activeService" x-transition:enter="transition ease-out duration-500"
             x-transition:enter-start="opacity-0 transform -translate-y-8"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform translate-y-0"
             class="bg-white/80 backdrop-blur-2xl shadow-2xl rounded-3xl p-12 max-w-4xl mx-auto mb-20 border border-white/50">
            
            <!-- Backend Details -->
            <div x-show="activeService === 'backend'">
                <h2 class="text-4xl font-bold text-sky-950 mb-6">Backend Development</h2>
                <p class="text-xl text-slate-700 mb-8 leading-relaxed">
                    More details coming soon!
                </p>
                <div class="flex flex-wrap gap-3 mb-10">
                    <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-medium">Laravel</span>
                    <span class="px-4 py-2 bg-sky-100 text-sky-800 rounded-full text-sm font-medium">PHP</span>
                    <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">Python</span>
                    <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">MySQL</span>
                    <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">REST APIs</span>
                </div>
                <a href="/contact" class="bg-sky-950 hover:bg-sky-700 text-white px-8 py-4 rounded-2xl font-semibold transition-all">
                    Start Backend Journey →
                </a>
            </div>

             <div x-show="activeService === 'frontend'">
                <h2 class="text-4xl font-bold text-sky-950 mb-6">Frontend Development</h2>
                <p class="text-xl text-slate-700 mb-8 leading-relaxed">
                    More details coming soon!
                </p>
                <div class="flex flex-wrap gap-3 mb-10">
                    <span class="px-4 py-2 bg-sky-100 text-sky-800 rounded-full text-sm font-medium">HTML</span>
                    <span class="px-4 py-2 bg-emerald-100 text-emerald-800 rounded-full text-sm font-medium">Tailwind CSS</span>
                </div>
                <a href="/contact" class="bg-sky-950 hover:bg-sky-700 text-white px-8 py-4 rounded-2xl font-semibold transition-all">
                    Start Frontend Journey →
                </a>
            </div>

             <div x-show="activeService === 'uiux'">
                <h2 class="text-4xl font-bold text-sky-950 mb-6">UI / UX</h2>
                <p class="text-xl text-slate-700 mb-8 leading-relaxed">
                    More details coming soon!
                </p>
                <div class="flex flex-wrap gap-3 mb-10">
                    <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium">Figma</span>
                </div>
                <a href="/contact" class="bg-sky-950 hover:bg-sky-700 text-white px-8 py-4 rounded-2xl font-semibold transition-all">
                    Start UI / UX Journey →
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
