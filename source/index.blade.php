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
    <p class="text-white text-xl md:text-2xl mb-12 leading leading-relaxed mx-auto px-20">
        Today's software landscape can feel overwhelming, especially with the rise of AI. Are we truly in control of our tools, 
        or are they controlling us? Is AI assisting us, or did we actually become the assistant? 
        These dilemmas haunt businesses and individuals alike. 

        Shkhara was established to flip the script, crafting intuitive software that serves you, not the other way around.
        Solid software solutions that streamline your daily challenges and make complex tasks feel simple. 

        The road to the top is tough, this is unavoidable.
        What we can change is making sure you wear better gear on your way up. 
    </p>
    <a href="/services" class="inline-block border-2 border-white text-white px-12 font-bold py-6 rounded-2xl hover:bg-white hover:text-sky-950">Our services</a>
</div>

<div class="py-40 text-center">
    <a href="/team" class="inline-block border-2 border-sky-950 text-sky-950 px-12 font-bold py-6 rounded-2xl hover:bg-sky-950 hover:text-white"> Our team</a>
</div>

@endsection
