@extends('_layouts.main')

@section('body')
<div class="h-screen gap-12 flex items-center justify-center">
    <div class="text-center">
         <h1 class="text-sky-950 text-6xl font-bold">test <br> Software <br> Solutions</h1>
    </div>

    <div>
        <img src="/assets/images/ai_mountains.jpeg"
        class="max-h-96 object-contain rounded-xl">
    </div>
</div>

<div class="py-40 bg-sky-950 text-center">
    <p class="text-white text-xl md:text-2xl mb-12 leading leading-relaxed mx-auto px-20">
        Today's software landscape feels overwhelming. 
        Are we truly in control of our tools, or are they controlling us? 
        This dilemma haunts businesses and individuals alike. 
        Shkhara Software Solutions exists to flip the script—crafting intuitive software that serves you, not the other way around. 
        Solutions that streamline your daily challenges and actually make complex tasks feel 
        simple. That's our sweet spot.
    </p>
    <a href="/services" class="inline-block border-2 border-white text-white px-12 font-bold py-6 rounded-2xl hover:bg-white hover:text-sky-950">Our services</a>
</div>

<div class="py-40">
    <a href="/team" class="inline-block border-2 border-sky-950 text-sky-950 px-12 font-bold py-6 rounded-2xl hover:bg-sky-950 hover:text-white"> Our team</a>
</div>

@endsection
