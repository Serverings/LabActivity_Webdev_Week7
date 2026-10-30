@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
   <section class="px-4 md:px-8 mt-12">
      <div class="max-w-7xl mx-auto">
         <div class="grid justify-center items-center gap-x-12 gap-y-16 lg:grid-cols-2">
            <div>
               <div class="max-w-3xl mx-auto text-center lg:mx-0 lg:text-left">
                  <p class="mb-2 font-medium text-blue-700 text-sm uppercase">
                     <span class="rotate-90 inline-block mr-2">|</span> WEB DEVELOPMENT 2025/2026
                  </p>
                  <h1 class="text-4xl text-slate-900 font-bold !leading-tight mb-6 md:text-5xl">
                     Jevlin Misael Chandra
                  </h1>
                  <p class="text-slate-600 text-lg leading-relaxed">
                     Beyond Pages, Into Infinite Realms. Set The Needle, Map The Future
                  </p>
               </div>

               <div class="mt-12">
                  <div class="grid gap-x-4 gap-y-6 text-center sm:grid-cols-3 lg:text-left">
                     <div class="flex flex-col">
                        <h5 class="text-blue-700 font-semibold text-2xl mb-2">3</h5>
                        <p class="text-base text-slate-600 font-medium">Semester</p>
                     </div>
                     <div class="flex flex-col">
                        <h5 class="text-blue-700 font-semibold text-2xl mb-2">30</h5>
                        <p class="text-base text-slate-600 font-medium">Project Made</p>
                     </div>
                     <div class="flex flex-col">
                        <h5 class="text-blue-700 font-semibold text-2xl mb-2">250</h5>
                        <p class="text-base text-slate-600 font-medium">How Many I Die</p>
                     </div>
                  </div> 
               </div>
            </div>

            <div class="columns-2 space-y-4">
               <div class="break-inside-avoid">
                  <img src="{{ asset('img/miegoreng.jpeg') }}" alt="Mie Goreng"
                     class="w-full h-full object-cover object-top rounded-lg max-h-[360px]" />
               </div>
               <div class="break-inside-avoid">
                  <img src="{{ asset('img/nasigoreng.jpeg') }}" alt="Nasi Goreng"
                     class="w-full h-full object-cover object-top rounded-lg max-h-[360px]" />
               </div>
               <div class="break-inside-avoid">
                  <img src="{{ asset('img/nasikuning.jpeg') }}" alt="Nasi Kuning"
                     class="w-full h-full object-cover object-top rounded-lg max-h-[360px]" />
               </div>
               <div class="break-inside-avoid">
                  <img src="{{ asset('img/indomie.jpeg') }}" alt="Indomie"
                     class="w-full h-full object-cover object-top rounded-lg max-h-[360px]" />
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="h-8"></div>
@endsection