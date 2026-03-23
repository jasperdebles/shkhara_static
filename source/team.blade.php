@extends('_layouts.main')

@section('body')
<div class="min-h-screen gap-8 md:gap-12 bg-sky-950 flex flex-col lg:flex-row items-center justify-center px-6 py-12 lg:py-24">
    <div class="max-w-md lg:max-w-lg text-left md:text-center order-2 lg:order-1">
        <h1 class="font-bold text-white text-3xl md:text-4xl lg:text-5xl mb-4 leading-tight">
            Jasper de Bles
        </h1>
        <h2 class="font-bold text-white text-xl md:text-2xl mb-6 leading-snug">
            Software Engineer & Business Analyst
        </h2>
        <p class="text-white text-base md:text-lg leading-relaxed break-words max-w-prose">
            Jasper has several years of experience in business analysis, mathematical modelling, and software automation 
            in the finance and engineering industry. 
            He majored in mathematical finance and economics from Copenhagen Business School and UNC Charlotte, NC. 
            Fun fact: I studied mandarin in Taiwan!
        </p>
    </div>
    <img src="/assets/images/linkedin.jpeg"
         alt="Jasper de Bles"
         class="max-h-96 w-64 md:w-80 lg:w-auto object-contain rounded-xl mx-auto lg:mx-0 order-1 lg:order-2">
</div>
@endsection
