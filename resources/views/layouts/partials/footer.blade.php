 <!-- Footer -->
 <footer class="bg-primary hidden md:block" aria-labelledby="footer-heading">
     <h2 id="footer-heading" class="sr-only">Footer</h2>
     <div class="px-5 py-12 mx-auto max-w-7xl lg:py-16">
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-24 mb-8">
             <div class="col-span-1 text-white">
                 <img src="{{ asset('assets/images/logo white.png') }}" class="w-auto h-7" alt="">
             </div>
             <div class="col-span-2 grid grid-cols-1 lg:grid-cols-6 gap-3 items-center text-white">
                 <div class="w-full">
                     <a href="">Chi Siamo</a>
                 </div>
                 <div class="w-full">
                     <a href="">Cosa Facciamo</a>
                 </div>
                 <div class="w-full">
                     <a href="">Sostenibilita</a>
                 </div>
                 <div class="w-full">
                     <a href="">Media</a>
                 </div>
                 <div class="w-full">
                     <a href="">RSI</a>
                 </div>
                 <div class="w-full">
                     <a href="">Carriere</a>
                 </div>
             </div>
         </div>
         <hr class="border-1 gradient-color mb-8">
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-24 mb-8">
             <div class="col-span-1 text-white">
                 <p class="font-semibold mb-8 text-sm">@2023 FLUORSID</p>
                 <p>Headquarters</p>
                 <p class="font-semibold text-lg max-w-fit mt-2">Milano, <br>Italia Via Flavio Vegezio, 1220149
                     Milano
                     (MI)
                 </p>
             </div>
             <div class="col-span-2 grid grid-cols-1 lg:grid-cols-6 gap-3 text-white">
                 <div class="space-y-4">
                     <a href="" class="block">I Nostri Valori</a>
                     <a href="" class="block">Dove Siamo</a>
                     <a href="" class="block">Persone</a>
                     <a href="" class="block">Career</a>
                 </div>
                 <div class="space-y-4">
                     <a href="" class="block">Chimica</a>
                     <a href="" class="block">Metalli</a>
                 </div>
                 <div class="space-y-4">
                     <a href="" class="block">Bilancio Di Sostenibiita</a>
                     <a href="" class="block">Certificazioni</a>
                     <a href="" class="block">Le Nostre Politiche</a>
                 </div>
                 <div class="space-y-4">
                     <a href="" class="block">Archivo</a>
                     <a href="" class="block">House Organ</a>
                 </div>
             </div>
         </div>
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-24 mb-8 items-end">
             <div class="col-span-1 text-white">
                 <p class="font-semibold text-[32px]">
                     Vita, rispetto e trasformazione dal 1969.
                 </p>
             </div>
             <div class="col-span-2 grid md:grid-cols-2 gap-10 items-center text-white">
                 <div>
                     <p class="text-lg font-semibold">info@fluorsid.com</p>
                 </div>
                 <div class="flex items-center gap-4">
                     <div class="w-11 h-11 p-3 rounded-full flex items-center justify-center bg-[#89D6EE]">
                         <i class="fab fa-instagram text-primary w-6 h-6"></i>
                     </div>
                     <div class="w-11 h-11 p-3 rounded-full flex items-center justify-center bg-[#89D6EE]">
                         <i class="fab fa-linkedin-in text-primary w-6 h-6"></i>
                     </div>
                     <div class="w-11 h-11 p-3 rounded-full flex items-center justify-center bg-[#89D6EE]">
                         <i class="fab fa-facebook-f text-primary w-6 h-6"></i>
                     </div>
                     <div class="w-11 h-11 p-3 rounded-full flex items-center justify-center bg-[#89D6EE]">
                         <i class="fab fa-wikipedia-w text-primary w-6 h-6"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- end footer -->

 <div class="block md:hidden px-5 max-w-7xl">
     <img src="{{ asset('assets/images/logo.png') }}" class="w-auto h-7" alt="">
     <div class="text-primary mt-8 mb-8">
         <p class="font-semibold mb-8 text-sm">@2023 FLUORSID</p>
         <p>Headquarters</p>
         <p class="font-semibold text-lg max-w-fit mt-2">Milano, <br>Italia Via Flavio Vegezio, 1220149
             Milano
             (MI)
         </p>
     </div>
     <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white"
         data-inactive-classes="text-gray-500 dark:text-gray-400">
         <h2 id="accordion-flush-heading-1">
             <button type="button"
                 class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                 data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                 aria-controls="accordion-flush-body-1">
                 <span>Chi Siamo</span>
                 <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M9 5 5 1 1 5" />
                 </svg>
             </button>
         </h2>
         <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
             <div class="py-5 border-b border-gray-200 dark:border-gray-700 space-y-4">
                 <div><a href="">I Nostri Valori</a></div>
                 <div><a href="">Dove Siamo</a></div>
                 <div><a href="">Persone</a></div>
                 <div><a href="">Career</a></div>
             </div>
         </div>
         <h2 id="accordion-flush-heading-2">
             <button type="button"
                 class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                 data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                 aria-controls="accordion-flush-body-2">
                 <span>Cosa Facciamo</span>
                 <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M9 5 5 1 1 5" />
                 </svg>
             </button>
         </h2>
         <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
             <div class="py-5 border-b border-gray-200 dark:border-gray-700 space-y-4">
                 <div><a href="">Chimica</a></div>
                 <div><a href="">Metalli</a></div>
             </div>
         </div>
         <h2 id="accordion-flush-heading-3">
             <button type="button"
                 class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                 data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                 aria-controls="accordion-flush-body-3">
                 <span>Sostenibilita</span>
                 <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M9 5 5 1 1 5" />
                 </svg>
             </button>
         </h2>
         <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
             <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                 <div class="py-5 border-b border-gray-200 dark:border-gray-700 space-y-4">
                     <div><a href="">Bilancio Di Sostenibiita</a></div>
                     <div><a href="">Certificazioni</a></div>
                     <div><a href="">Le Nostre Politiche</a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>
