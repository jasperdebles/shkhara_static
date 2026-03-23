@extends('_layouts.main')

@section('body')
<div class="min-h-screen bg-sky-950 flex items-center justify-center py-12 px-6">
    <div class="max-w-md w-full space-y-6">
        <h1 class="text-white text-4xl font-bold text-center mb-8">Contact</h1>

        <form name="contact" method="POST" data-netlify="true" class="flex flex-col space-y-4">
            <input type="hidden", name="form-name" value="contact">
            <input name="name" placeholder="Name" required class="w-full p-4 rounded-xl border border-white/30 text-white bg-white/10 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-sky-400">
            <input name="_replyto" type="email" placeholder="E-mail" required class="w-full p-4 rounded-xl border border-white/30 text-white bg-white/10 placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-sky-400">
            <textarea name="message" placeholder="Tell us about your challenges!" class="w-full p-4 rounded-xl border border-white/30 bg-white/10 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-sky-400"></textarea>
            <button 
                type="submit" class="w-full bg-sky-400 hover:bg-sky-300 text-slate-900 py-4 px-8 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transition-all">Submit
            </button>
        </form>
    </div>
</div>
@endsection