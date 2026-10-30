@extends('layouts.app')

@section('title', 'Halaman About')

@section('content')
   <section style="padding: 80px 20px; background-color: #ffffff; display: flex; justify-content: center;">
      <div style="display: flex; align-items: center; gap: 60px; max-width: 1000px; width: 100%; flex-wrap: wrap; justify-content: center;">
         
         <div style="flex-shrink: 0;">
            <img src="{{ asset('img/meong.jpeg') }}" alt="Foto Profil" style="width: 350px; height: 350px; object-fit: cover; border-radius: 20px; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
         </div>

         <div style="flex: 1; min-width: 300px;">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #1a202c; margin-bottom: 24px; margin-top: 0;">About Me</h2>
            
            <p style="font-size: 1.125rem; line-height: 1.7; color: #4a5568; margin-bottom: 16px;">
               Halo! Saya adalah seorang mahasiswa Informatika yang bersemangat dalam membangun perangkat lunak dan desain antarmuka yang menarik. Saya menikmati proses memecahkan masalah teknis sekaligus mengeksplorasi sisi kreatif dalam pengembangan web.
            </p>
            
            <p style="font-size: 1.125rem; line-height: 1.7; color: #4a5568; margin-bottom: 16px;">
               Di luar pengkodean, saya sering menghabiskan waktu dengan kucing oren.
            </p>
         </div>

      </div>
   </section>

   <section class="px-4 md:px-8 md:pt-4 md:pb-2 mt-10 border-0">
      <div class="max-w-6xl mx-auto mt-10 mb-20">
         <div class="max-w-3xl mx-auto mb-12 text-center md:mx-auto md:my-20">
            <h2 class="text-3xl font-bold text-slate-900 md:text-4xl mt-10 mb-6">SKILL</h2>
            <p class="text-base text-slate-600 leading-relaxed">Skill that i have</p>
         </div>

         <div class="grid gap-x-12 gap-y-16 md:grid-cols-2 lg:grid-cols-3">
            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-blue-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                     <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">HTML</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>

            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-pink-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                     <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">JavaScript</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>

            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-green-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-green-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                     <path d="M0 16.5V1.127C0 .502.506 0 1.127 0h21.748C23.498 0 24 .505 24 1.126V15.95c-.676-.413-1.467-.62-2.372-.62-1.258 0-2.212.296-2.862.886-.65.591-.974 1.333-.974 2.226 0 .979.336 1.698 1.008 2.158.397.276 1.114.53 2.151.765l1.056.237c.618.135 1.07.29 1.36.466.288.18.432.436.432.765 0 .564-.29.95-.872 1.157l-.024.008H20.68a1.528 1.528 0 0 1-.688-.462c-.185-.225-.31-.565-.372-1.021h-1.99c0 .56.109 1.053.325 1.483h-1.681c.196-.396.294-.837.294-1.32 0-.889-.297-1.568-.892-2.037-.384-.302-.952-.543-1.705-.724l-1.719-.412c-.663-.158-1.096-.296-1.299-.413a.858.858 0 0 1-.473-.799c0-.387.16-.69.48-.906.32-.217.75-.325 1.286-.325.482 0 .886.084 1.21.25.488.253.75.68.785 1.28h2.003c-.036-1.06-.425-1.869-1.167-2.426-.742-.557-1.639-.836-2.69-.836-1.258 0-2.212.296-2.861.886-.65.591-.975 1.333-.975 2.226 0 .979.336 1.698 1.008 2.158.397.276 1.114.53 2.152.765l1.055.237c.618.135 1.071.29 1.36.466.288.18.433.436.433.765 0 .564-.291.95-.873 1.157l-.025.008h-2.223a1.528 1.528 0 0 1-.688-.462c-.185-.225-.31-.565-.372-1.021h-1.99c0 .56.108 1.053.324 1.483H6.611a4.75 4.75 0 0 0 .667-1.801H5.215c-.14.514-.316.9-.528 1.157-.261.326-.603.54-1.026.644H2.42c-.45-.115-.839-.37-1.165-.762C.792 22.68.56 21.842.56 20.724c0-1.119.218-1.984.656-2.595.437-.611 1.035-.917 1.793-.917.744 0 1.305.217 1.684.65.212.243.386.604.52 1.082H7.3c-.032-.622-.262-1.242-.69-1.86-.776-1.1-2.003-1.65-3.68-1.65-1.168 0-2.145.355-2.929 1.067zm24 3.654v-1.562h-.518c-.036-.6-.298-1.026-.785-1.279-.325-.166-.728-.25-1.21-.25-.537 0-.966.108-1.286.325-.32.216-.48.518-.48.906 0 .357.157.623.473.799.203.117.636.255 1.299.413l1.718.412c.29.07.554.149.789.236z"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">CSS</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>

            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-purple-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-purple-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                     <path d="M3.8672 1.0527v.0157L0 3.3848v17.914l3.8965-2.332h18.3398V2.3301c0-.702-.5773-1.2774-1.2793-1.2774H3.8672zm7.5058 4.0098h3.3008l2.9844 9.9512h-2.5879l-.5683-2.1895h-2.9844l-.5703 2.1621h-2.416l2.8417-9.9238zm11.8633.0273v14.877H4.172l-2.0684 1.2383v.4648c0 .702.5793 1.2774 1.2813 1.2774H24V5.0898h-.7637zM12.9668 6.6816l-.9941 4.3243h2.0468l-1.0527-4.3243z"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">AutoFusion 360</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>

            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-orange-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-orange-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                     <path d="M10 2v2"></path>
                     <path d="M14 2v2"></path>
                     <path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"></path>
                     <path d="M6 2v2"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">Java</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>

            <div class="text-center">
               <div class="w-12 h-12 p-3 rounded-md flex items-center justify-center mx-auto bg-indigo-50 mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-indigo-700 w-full h-full inline-block" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor">
                     <path d="M14.25.18l.9.2.73.26.59.3.45.32.34.34.25.34.16.33.1.3.04.26.02.2-.01.13V8.5l-.05.63-.13.55-.21.46-.26.38-.3.31-.33.25-.35.19-.35.14-.33.1-.3.07-.26.04-.21.02H8.77l-.69.05-.59.14-.5.22-.41.27-.33.32-.27.35-.2.36-.15.37-.1.35-.07.32-.04.27-.02.21v3.06H3.17l-.21-.03-.28-.07-.32-.12-.35-.18-.36-.26-.36-.36-.35-.46-.32-.59-.28-.73-.21-.88-.14-1.05-.05-1.23.06-1.22.16-1.04.24-.87.32-.71.36-.57.4-.44.42-.33.42-.24.4-.16.36-.1.32-.05.24-.01h.16l.06.01h8.16v-.83H6.18l-.01-2.75-.02-.37.05-.34.11-.31.17-.28.25-.26.31-.23.38-.2.44-.18.51-.15.58-.12.64-.1.71-.06.77-.04.84-.02 1.27.05zm-6.3 1.98l-.23.33-.08.41.08.41.23.34.33.22.41.09.41-.09.33-.22.23-.34.08-.41-.08-.41-.23-.33-.33-.22-.41-.09-.41.09zm13.09 3.95l.28.06.32.12.35.18.36.27.36.35.35.47.32.59.28.73.21.88.14 1.04.05 1.23-.06 1.23-.16 1.04-.24.86-.32.71-.36.57-.4.45-.42.33-.42.24-.4.16-.36.09-.32.05-.24.02-.16-.01h-8.22v.82h5.84l.01 2.76.02.36-.05.34-.11.31-.17.29-.25.25-.31.24-.38.2-.44.17-.51.15-.58.13-.64.09-.71.07-.77.04-.84.01-1.27-.04-1.07-.14-.9-.2-.73-.25-.59-.3-.45-.33-.34-.34-.25-.34-.16-.33-.1-.3-.04-.25-.02-.2.01-.13v-5.34l.05-.64.13-.54.21-.46.26-.38.3-.32.33-.24.35-.2.35-.14.33-.1.3-.06.26-.04.21-.02.13-.01h5.84l.69-.05.59-.14.5-.21.41-.28.33-.32.27-.35.2-.36.15-.36.1-.35.07-.32.04-.28.02-.21V6.07h2.09l.14.01zm-6.47 14.25l-.23.33-.08.41.08.41.23.33.33.23.41.08.41-.08.33-.23.23-.33.08-.41-.08-.41-.23-.33-.33-.23-.41-.08-.41.08z"></path>
                  </svg>
               </div>
               <h3 class="text-slate-900 text-lg font-semibold mb-3">Python</h3>
               <p class="text-slate-600 text-base leading-relaxed"></p>
            </div>
         </div>
      </div>
   </section>
@endsection