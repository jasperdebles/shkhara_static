@extends('_layouts.main')

@section('body')
<div class="h-screen gap-12 flex items-center justify-center">
    <div class="text-center">
         <h1 class="text-sky-950 text-6xl font-bold">Solid. <br> Software. <br> Solutions.</h1>
    </div>

    <div>
        <img src="/assets/images/ai_mountains.jpeg"
             class="max-h-96 object-contain rounded-xl">
    </div>
</div>

<div class="py-40 bg-sky-950 text-center">
    <p class="text-white text-xl md:text-2xl mb-12 leading-relaxed mx-auto px-20">
        Today's software landscape can feel overwhelming, especially with the rise of AI. Are we truly in control of our tools, 
        or are they controlling us? Is AI assisting us, or did we actually become the assistant? 
        These dilemmas haunt businesses and individuals alike. 
    </p>
    <p class="text-white text-xl md:text-2xl mb-12 leading-relaxed mx-auto px-20">
        Shkhara was established to flip the script, crafting intuitive software that serves you, not the other way around.
        Solid. Software. Solutions. that streamline your daily challenges and make complex tasks feel simple. 
    </p>
    <p class="text-white text-xl md:text-2xl mb-12 leading-relaxed mx-auto px-20">
        We cannot change the road. What we can change is making sure you wear better gear on your way up. 
    </p>
    <a href="/services" class="inline-block border-2 border-white text-white px-12 font-bold py-6 rounded-2xl hover:bg-white hover:text-sky-950">Our services</a>
</div>

<div class="py-40 text-center">
    <div class="flex flex-wrap justify-center gap-8 mb-8">
        {{-- 1. Discusseren / vragen --}}
        <div class="flex flex-col items-center w-48">
            <div class="flex h-10 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-950" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-sky-950 text-center leading-relaxed">
                Discussing root issues
            </span>
        </div>

        {{-- 2. In kaart brengen --}}
        <div class="flex flex-col items-center w-48">
            <div class="flex h-10 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-950" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6M9 16h6M9 8h6M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2z" />
                </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-sky-950 text-center leading-relaxed">
                Mapping from start to finish
            </span>
        </div>

        {{-- 3. Coderen --}}
        <div class="flex flex-col items-center w-48">
            <div class="flex h-10 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-950" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.6 16.6l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4zM9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/>
                </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-sky-950 text-center">
                Clean coding
            </span>
        </div>

        {{-- 4. Testing --}}
        <div class="flex flex-col items-center w-48">
            <div class="flex h-10 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-950" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
            </div>
            <span class="mt-2 text-sm font-medium text-sky-950 text-center">
                Testing to perform
            </span>
        </div>
    </div>

    <a href="/team" class="inline-block border-2 border-sky-950 text-sky-950 px-12 font-bold py-6 rounded-2xl hover:bg-sky-950 hover:text-white">
        Our team
    </a>
</div>


@endsection
