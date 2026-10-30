@extends('layouts.app')

@section('title', 'Halaman Blog')

@section('content')
   <section class="bg-black mt-6 px-4 md:px-8">
      <div class="max-w-md mx-auto sm:max-w-4xl lg:max-w-7xl">
         <div class="mb-12 max-w-3xl mx-auto text-center md:mb-16">
            <h2 class="text-3xl font-bold mb-6 text-slate-900 md:text-4xl">Latest Blog Posts</h2>
            <p class="text-base text-slate-600 leading-relaxed">Explore our latest articles, insights,
               and practical tips designed to help you stay updated, improve your workflow, and build better products with
               confidence.</p>
         </div>

         <div class="grid grid-cols-1 gap-8 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/images/ai-img1.webp" alt="Design ai image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By John Doe</span>
                     <h3 class="text-lg font-semibold text-slate-900">Creative Design Trends</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Stay ahead of the
                     curve with the latest creative design trends shaping the digital world.</p>
               </a>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/hotel-img.webp" alt="Hotel image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By Mark Johnson</span>
                     <h3 class="text-lg font-semibold text-slate-900">The Rise of Boutique Hotels</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Explore how boutique
                     hotels are redefining luxury and guest experience in the travel industry.</p>
               </a>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/team-image.webp" alt="Team image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By Steve Smith</span>
                     <h3 class="text-lg font-semibold text-slate-900">Boost Team Productivity</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Discover powerful
                     techniques to help your team collaborate better and get more done.</p>
               </a>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/images/headphone-img8.webp" alt="Headphone image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By Sam Johnson</span>
                     <h3 class="text-lg font-semibold text-slate-900">Ecommerce Trends to Watch</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Stay ahead with
                     insights into what’s driving the future of online shopping and digital retail.</p>
               </a>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/hacks-watch.webp" alt="Watch image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By Robert Brown</span>
                     <h3 class="text-lg font-semibold text-slate-900">Time Management Hacks</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Master your schedule
                     with proven strategies that save hours each week and reduce stress.</p>
               </a>
            </article>

            <article class="bg-white border border-slate-200 shadow-sm p-2 rounded-lg overflow-hidden">
               <div class="bg-gray-50 aspect-[23/16] rounded-lg overflow-hidden">
                  <img src="https://readymadeui.com/Imagination.webp" alt="Imagination image" class="w-full h-full object-cover object-top" />
               </div>
               <a href="https://www.behance.net/gallery/239027109/Design-Trends-2026" class="p-4 block mt-2">
                  <div>
                     <span class="text-sm block text-slate-500 mb-2">10 FEB 2023 | By Rachel Green</span>
                     <h3 class="text-lg font-semibold text-slate-900">The Power of Creativity</h3>
                  </div>
                  <hr class="my-4 border-slate-300" />
                  <p class="text-slate-600 text-base leading-relaxed line-clamp-3">Uncover how creative
                     thinking fuels innovation and helps brands stay competitive in any market.</p>
               </a>
            </article>
         </div>
      </div>
   </section>

   <div class="h-8"></div>
@endsection